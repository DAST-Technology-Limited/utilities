<div class="container-fluid mt-5 p-5">
    <div class="row">
        <div class="col-12"><a href="/dashboard/airtime">
                <img src="{{asset('/images/s_neco.jpg')}}" class="w-100" alt=""></a></div>
        <div class="col-12">
            <h1>NECO RESULT PIN</h1>
            <form wire:submit.prevent="buyNecoPin()" class="border alert alert-secondary">

                @if($error_message != "")
                <div class="alert alert-danger w-100">{{$error_message}}</div>
                @endif
                @if($success_message != "")
                <div class="alert alert-success w-100">{{$success_message}}</div>
                @endif

                <h2>Price: N{{$discountPrice}}</h2>
                <p>
                    Card details (serial number and PIN) will be displayed here and also sent to your email.</p>

                <button type="button" data-bs-toggle="modal" data-bs-target="#waecPurchase" class="alert alert-primary">Buy Pin</button>
                @include("livewire.utilities.inc.confirm_result_checker")
            </form>
        </div>
    </div>
</div>