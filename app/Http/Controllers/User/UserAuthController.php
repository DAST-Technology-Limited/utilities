<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\TGUser;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function viewVerify($tg_id, $token)
    {
        return view("verify-user.verify-user")->with(['tg_id' => $tg_id, "token" => $token]);
    }
}
