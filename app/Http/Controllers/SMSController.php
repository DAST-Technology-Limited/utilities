<?php

namespace App\Http\Controllers;

use App\Models\SMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Twilio\Rest\Client;

class SMSController extends Controller
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
            "message"=>"required|string",
            "recipient"=>"required|string"

        ]);
    
        if($validator->fails()){
                
            return response()->json(["status"=>false, "data"=>$validator->errors()]);       
        }

       $mail = SMS::create($request->all());
       if($mail){
        return response()->json(["status"=>true, "data"=>["message"=>"SMS sent"]]);       
       }
       else{
        
        return response()->json(["status"=>false, "data"=>["SMS Failed"]]);  
       }
      } catch (\Throwable $th) {
        return $th;
        return response()->json(["status"=>false, "data"=>["Something went wrong"]]);  
      }
      
      finally{
        
        \Artisan::call("schedule:run");
        
        }
    }


  static  function  deliverMessage(SMS $sms){

   $twilio = new Client(env("TWILIO_ACCOUNT_SID"), env("TWILIO_AUTH_TOKEN")); 
 
        $message = $twilio->messages 
                  ->create($sms->recipient, // to 
                           array(     
                            "from"=>env("TWILIO_NUMBER"),
                               "body" => $sms->message
                           ) 
                  ); 
 
      $delivery = $message->sid;

    }

}
