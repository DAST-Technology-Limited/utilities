<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DastPagesController extends Controller
{
   public function about(){
    return view('dast.about');
   }
   public function app(){
    return view('dast.app');
   }
   public function chat(){
    return view('dast.chat');
   }
   public function pay(){
    return view('dast.pay');
   }


   public function contact(){
      return view('dast.contact');
     }


     public function partners(){
      return view('dast.partner');
     }
     


     
     public function lab(){
      return view('dast.lab');
     }
     
     
     public function army(){
      return view('dast.army');
     }
}
