<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\TGUser;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function verifySub($tg_id)
    {
       $subdetails = array("name" => "clement");
       $user = TGUser::where("tg_id", $tg_id)->get();
       if(count($user) > 0)
       {
        $user = $user[0];
        $subdetails["totalrequests"] = $user->chats()->where("created_at", 'LIKE', "%".date('Y-m-d')."%")->count();
        $subdetails["active_sub"] = Carbon::parse($user->active_sub)->isFuture();
       }
       else {
        $subdetails["totalrequests"] = 0;
        $subdetails["active_sub"] = false;
       }
       return $subdetails;
    }
}
