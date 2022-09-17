<?php

namespace App\Http\Controllers;

use App\Models\MailSender;
use App\Models\Subscribers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubscribersController extends Controller
{
    public function send(Request $request)
    {


        try {
            $validator  = Validator::make($request->all(), [
                "title" => "required|string",
                "email" => "required|string|email",
                "name" => "required|string",
                "body" => "required|string"

            ]);

            if ($validator->fails()) {

                return response()->json(["status" => false, "data" => $validator->errors()]);
            }

            $subscriber = Subscribers::firstOrCreate(["email" => $request->email, "name" => $request->name]);
            if ($subscriber) {


                try {

                    $mail = MailSender::create(
                        [
                            "subject" => $request->title,
                            "body" => $request->body,
                            "sender_email" => "support@dast.tech",
                            "sender_name" => "DAST",
                            "reciever_email" => $request->email,
                            "reciever_name" => $request->name,
                            "view" => "subscriber"
    
                        ]
                    );
                    if ($mail) {
                        return response()->json(["status" => true, "data" => ["message" => "Mail sent"]]);
                    } else {

                        return response()->json(["status" => false, "data" => ["Failed"]]);
                    }
                } catch (\Throwable $th) {
                    return $th;
                    return response()->json(["status" => false, "data" => ["Something went wrong"]]);
                } finally {

                    \Artisan::call("schedule:run");
                }
            } else {

                return response()->json(["status" => false, "data" => ["Failed"]]);
            }
        } catch (\Throwable $th) {
            return $th;
            return response()->json(["status" => false, "data" => ["Something went wrong"]]);
        } finally {

            \Artisan::call("schedule:run");
        }
    }
}
