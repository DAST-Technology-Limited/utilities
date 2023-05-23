<div>

    <div class="container">
        <div class="row">
            @if($message )
            <div class="col-md-8 offset-md-2 text-center mt-5 p-5">
                <div class="alert {{$message_type == 'error' ? 'alert-danger' : 'alert-success'}}">
                    {{$message}}! <a href="{{$link}}" target="_blank">here</a>
                </div>
            </div>

            @else
            <div class="col-md-8 offset-md-2 text-center mt-5 p-5">
                <h2 class="">Email Verification</h2>
                @if(!$email_code)
                <form wire:submit.prevent="sendCode">
                    <div class="alert alert-info w-100 ">You will recieve a verification code in your email</div>
                    <input type="email" wire:model="email" class="alert w-100 alert-primary " placeholder="Enter your email" required>
                    @error("email")
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <br>
                    <button class="btn btn-primary">Send Code</button>
                </form>
                @else
                <form wire:submit.prevent="verifyCode">
                    <div class="alert alert-info w-100 ">We have sent you a verify code your email. Enter the code below to verify your email</div>
                    <input type="number" wire:model="code" class="alert w-100 alert-primary " placeholder="Enter code here" required>
                    @if($code_error)
                    <div class="alert alert-danger">{{$code_error}}</div>
                    @endif
                    @error("email")
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <br>
                    <button class="btn btn-primary">Verify Code</button>
                    <p class=" mt-3">Didn't recieve the code? <a href="#"><span wire:click="resetCode" class="cursor-pointer"> Restart again</span></a></p> 
                </form>
                @endif
            </div>
            @endif
        </div>
    </div>

</div>