<?php

namespace App\Http\Livewire\VerifyUser;

use App\Http\Controllers\Telegram\BaseTelegramController;
use App\Models\TGUser;
use App\Models\User;
use App\Notifications\EmailVerification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class VerifyUser extends Component
{
    public $tg_id;
    public $token;
    public $message;
    public $email;
    public $message_type;
    public $email_code;
    public $code;
    public $code_error;
    public $link;
    public $user_id;
    public $user_id2;

    protected $rules = [
        "email" => "email|required"
    ];

    public function sendCode()
    {
        $user = User::where("email", $this->email)->get();
        if(count($user) == 0)
        {
            $this->message_type = "error";
            $this->link = URL("/register");
            $this->message = "Sorry account with this email address doesn't exist. Register with us continue using our services";
        }
        else
        {
            $this->user_id = $user[0]->id;
        }
        $this->validate($this->rules);
        $this->email_code  = mt_rand();
        Notification::route('mail', $this->email)
            ->notify(new EmailVerification($this->email_code));
    }
    
    public function verifyCode()
    {
        if ($this->code == $this->email_code)
        {
            $user = TGUser::find($this->user_id2);
            $user->user_id = $this->id;
            $user->save();
            $this->message_type = "success";
            $this->link = "https://t.me/dast_pay_bot";
            $this->message = "Email verified successfully. Continue in your telegram";
        }
        else {
            $this->code_error = "Invalid verification code";
        }
    }
    public function resetCode()
    {
        $this->email_code = null;
        $this->email = "";
    }

    public function render()
    {
        $user = TGUser::where("tg_id", $this->tg_id)->where("link_code", $this->token)->get();
       
        if (count($user) == 0) {
            $this->message_type = "error";
            $this->message = "User not found!";
        }
        {
            $this->user_id2 = $user[0]->id;
        }
        return view('livewire.verify-user.verify-user')->with("user", $user);
    }
}
