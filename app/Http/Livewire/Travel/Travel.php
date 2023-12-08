<?php

namespace App\Http\Livewire\Travel;

use Livewire\Component;

class Travel extends Component
{
    public function render()
    {
        return view('livewire.travel.travel')->extends("layouts.dashboard");
    }
}
