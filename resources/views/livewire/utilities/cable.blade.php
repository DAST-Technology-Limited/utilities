<div class="container-fluid mt-5 p-5">
    <div class="row">
        <div class="col-12"><a href="#">
                @if($billtype == "dstv")
                <img src="{{asset('/images/s_gotv.jpg')}}" class="w-100" alt="">
                @elseif($billtype == "gotv")
                <img src="{{asset('/images/s_dstv.jpg')}}" class="w-100" alt="">
                @elseif($billtype == "startimes")
                <img src="{{asset('/images/s_startimes.jpg')}}" class="w-100" alt="">
                @endif
            </a>
        </div>
        <div class="col-12">
            <h1>{{ucfirst($billtype)}} Recharge</h1>
            <form wire:submit.prevent="buyCable()" class="border alert alert-secondary">

                @if($error_message != "")
                <div class="alert alert-danger w-100">{{$error_message}}</div>
                @endif
                @if($success_message != "")
                <div class="alert alert-success w-100">{{$success_message}}</div>
                @endif

                <div class="row">
                    <div class="col-md-8">

                        <label for="billtype">Cable Type</label>
                        <select wire:model="billtype" id="" class="w-100 alert alert-dark">
                            <option value="">Select</option>
                            @foreach($bill_types as $bt)
                            <option value="{{$bt}}">{{$bt}}</option>
                            @endforeach
                        </select>
                        @error("billtype")
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <label for="smartno">Smart Card or IUC No</label>
                        <input wire:model="smartno" type="text" wire:keydown="resetCableNo()" class="w-100 alert alert-dark" placeholder="Smart card number or IUC number">
                        @if($cable_info != "")
                        <div class="alert alert-primary">{{$cable_info}}</div>
                        @endif

                    </div>
                </div>



                @if($error_message != "")
                <div class="alert alert-danger w-100">{{$error_message}}</div>
                @endif
                @if($success_message != "")
                <div class="alert alert-success w-100">{{$success_message}}</div>
                @endif
                
                @if(!$is_customer_verified && $smartno != "")
                <button type="button"class="alert alert-primary" wire:click="verifyCustomer()" >Verify Customer</button>
                @endif

                @if($is_customer_verified)
                <button type="button" data-bs-toggle="modal" data-bs-target="#cablePurchase" class="alert alert-primary">Pay {{strtoupper($billtype)}} Subscription</button>
                @endif
                @include("livewire.utilities.inc.confirm_cable")
            </form>
        </div>
    </div>
</div>