<?php

namespace App\Http\Controllers;
use App\Models\PlatformToken;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlatformTokenController extends Controller
{
 
    function isValidToken($token){
       
    $PlatformToken = PlatformToken::where("token", $token)->get();
    return (count($PlatformToken)==1);
    
    }
}
