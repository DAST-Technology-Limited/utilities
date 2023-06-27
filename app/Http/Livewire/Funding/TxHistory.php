<?php

namespace App\Http\Livewire\Funding;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TxHistory extends Component
{
    protected $histories;

    public function mount()
    {
        $user = User::find(auth()->id());
        $this->histories = $user->wallet()->fundingHistory()->latest()->paginate(10);
    }

    public function render()
    {
        return view('livewire.funding.tx-history', [
            'histories' => $this->histories,
        ]);
    }
}
