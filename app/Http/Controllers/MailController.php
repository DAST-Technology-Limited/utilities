<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use App\Jobs\SendEmailJob;
use App\Models\MailSender;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {

      
      try {
        $validator  = Validator::make($request->all(),[
            "subject"=>"required|string",
            "body"=>"required|string",
            "sender_email"=>"required|string|email",
            "sender_name"=>"required|string",
            "reciever_email"=>"required|string|email",
            "reciever_name"=>"required|string",
            "view"=>"required|string"

        ]);
    
        if($validator->fails()){
                
            return response()->json(["status"=>false, "data"=>$validator->errors()]);       
        }

       $mail = MailSender::create($request->all());
       if($mail){
        return response()->json(["status"=>true, "data"=>["message"=>"Mail sent"]]);       
       }
       else{
        
        return response()->json(["status"=>false, "data"=>["Failed"]]);  
       }
      } catch (\Throwable $th) {
        return $th;
        return response()->json(["status"=>false, "data"=>["Something went wrong"]]);  
      }
      finally{
        
      \Artisan::call("schedule:run");
      
      }
    }

  
}
