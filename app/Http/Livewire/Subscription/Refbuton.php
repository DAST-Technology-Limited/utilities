<?php

namespace App\Http\Livewire\Subscription;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Refbuton extends Component
{
    public function render()
    {
        return view('livewire.subscription.refbuton');
    }

    public function GenerateLink()
    {
        $ref = "";
        while(true)
        {
            $ref = mt_rand(100000,999999);
            $user = User::where("ref_id", $ref)->first();
            if (!$user){
                break;
            }
        }

        $user = User::find(Auth::user()->id);
        $user->ref_id = $ref;
        $user->save();
        return redirect("/home");
    }
}
