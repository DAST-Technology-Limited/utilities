<div class="container-fluid mt-5 p-5">
    <div class="row">
        <div class="col-12">
            <h1>Buy Data Plan</h1>

            <form wire:submit.prevent="buyData()">
                @if($error_message != "")
                <div class="alert alert-danger w-100">{{$error_message}}</div>
                @endif
                @if($success_message != "")
                <div class="alert alert-success w-100">{{$success_message}}</div>
                @endif

                <div class="row">
                    <div class="col-md-8">
                        
                        <label for="network">Network</label>
                        <select wire:model="network" id="" wire:change="onChooseNetwork()" class="w-100 alert alert-muted">
                            <option value="">Select</option>
                            @foreach($networks as $net)
                            <option value="{{$net}}">{{strtoupper($net)}}</option>
                            @endforeach
                        </select>
                        @error("network")
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <label for="data_type">Type</label>
                        <select wire:model="data_type" id="" wire:change="dataList($event.target.value)" class="w-100 alert alert-muted">
                            <option value="">Select</option>
                            @foreach($data_types as $dt)
                            <option value="{{$dt}}">{{strtoupper($dt)}}</option>
                            @endforeach
                        </select>
                        @error("data_type")
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        @if($data_type)
                        <label for="amount">Amount</label>
                        <select wire:model="amount" id="" class="w-100 alert alert-muted">
                            <option value="">Select</option>
                            @foreach($data_list as $data_item)
                            <option value="{{$loop->index}}">{{$data_item["size"]. " ". $data_item["validity"]}} - N{{number_format($data_item["discountAmount"])}}</option>
                            @endforeach
                            @endif
                        </select>
                        @error("amount")
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <label for="phone_number">Phone number</label>
                        <input wire:model="phone_number" type="text" class="w-100 alert alert-muted" placeholder="Format: 0706..., 080..., 091...">
                        @error("phone_number")
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#airtimePurchase">Buy Data Plan</button>
                        @if($network != "" && $phone_number != "" && $amount != "")
                        @include("livewire.utilities.inc.confirm_data")
                        @endif
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>