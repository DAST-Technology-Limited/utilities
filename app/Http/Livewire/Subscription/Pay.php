<?php

namespace App\Http\Livewire\Subscription;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Pay extends Component
{
    public $package;
    public $message;

    public function mount($package_id)
    {
        $this->package = DB::select("select * from subscription_packages where affiliate_level_id = ?", [$package_id]);
        if(count($this->package) < 1)
        {
            return redirect("/dashboard/pricing");
        }
    }

    public function render()
    {
        return view('livewire.subscription.pay')
            ->extends("layouts.dashboard")
            ->section("content");
    }
}
