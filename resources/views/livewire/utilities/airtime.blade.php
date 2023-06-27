<div class="container-fluid mt-5 p-5">
    <div class="row">
        <div class="col-12">
            <h1>Buy Airtime</h1>

            <form wire:submit.prevent="buyAirtime()">
                @if($error_message != "")
                <div class="alert alert-danger w-100">{{$error_message}}</div>
                @endif
                @if($success_message != "")
                <div class="alert alert-success w-100">{{$success_message}}</div>
                @endif

                <div class="row">
                    <div class="col-md-8">
                        <label for="network">Network</label>
                        <select wire:model="network" id="" class="w-100 alert alert-muted">
                            <option value="">Select</option>
                            @foreach($networks as $net)
                            <option value="{{$net}}">{{strtoupper($net)}}</option>
                            @endforeach
                        </select>
                        @error("network")
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <label for="amount">Amount</label>
                        <select wire:model="amount" id="" class="w-100 alert alert-muted">
                            <option value="">Select</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                            <option value="2000">2000</option>
                            <option value="5000">5000</option>
                            <option value="10000">10000</option>
                        </select>
                        @error("amount")
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <label for="phone_number">Phone number</label>
                        <input wire:model="phone_number" type="text" class="w-100 alert alert-muted" placeholder="Format: 0706..., 080..., 091...">
                        @error("phone_number")
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#airtimePurchase">Buy Airtime</button>
                        @if($network != "" && $phone_number != "" && $amount != "")
                        @include("livewire.utilities.inc.confirm")
                        @endif
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>