<div class="container-fluid mt-5 p-5">
    <div class="row">
        <div class="col-12"><a href="#">
                <img src="{{asset('/images/s_electricity.jpg')}}" class="w-100" alt=""></a></div>
        <div class="col-12">
            <h1>ELECTRICITY BILLS</h1>
            <form wire:submit.prevent="buyElectricityBill()" class="border alert alert-secondary">

                @if($error_message != "")
                <div class="alert alert-danger w-100">{{$error_message}}</div>
                @endif
                @if($success_message != "")
                <div class="alert alert-success w-100">{{$success_message}}</div>
                @endif

                <div class="row">
                    <div class="col-md-8">

                        <label for="electricity_index">Choose electricity bill</label>
                        <select wire:model="electricity_index" id="" class="w-100 alert alert-dark">
                            <option value="">Select</option>
                            @foreach($electricity_list as $elect)
                            <option value="{{$loop->index}}">{{$elect->name ?? $elect["name"]}}</option>
                            @endforeach
                        </select>
                        @error("electricity_index")
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <label for="mtype">Meter type</label>
                        <select wire:model="mtype" id="" class="w-100 alert alert-dark">
                            <option value="">Select</option>
                            <option value="1">Prepaid</option>
                            <option value="0">Postpaid</option>
                        </select>
                        @error("mtype")
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <label for="meter_no">Meter Number</label>
                        <input wire:model="meter_no" type="text" wire:keydown="resetMeter()" class="w-100 alert alert-dark" placeholder="Meter no">
                        @if($meter_info != "")
                        <div class="alert alert-primary">{{$meter_info}}</div>
                        @endif

                        @error("meter_no")
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        @if($isMeterVerified)
                        <label for="meter_no">Enter Amount - Min: N{{$electricity_list[$electricity_index]['min_denomination'] ?? 0 }}, Max: N{{$electricity_list[$electricity_index]['max_denomination'] ?? 0 }} (Multiples of 100)</label>
                        <input wire:model="amount" type="text" class="w-100 alert alert-dark" placeholder="Amount">
                        @endif
                    </div>
                </div>

                @if($error_message != "")
                <div class="alert alert-danger w-100">{{$error_message}}</div>
                @endif
                @if($success_message != "")
                <div class="alert alert-success w-100">{{$success_message}}</div>
                @endif

                @if($isMeterVerified)
                <button type="button" data-bs-toggle="modal" data-bs-target="#electricityPurchase" class="alert alert-primary">Purchase Electricity</button>
                @else
                <button type="button" wire:click="verifyMeter()" class="alert alert-primary">Verify Meter</button>
                @endif
                @include("livewire.utilities.inc.confirm_electricity")
            </form>
        </div>
    </div>
</div>