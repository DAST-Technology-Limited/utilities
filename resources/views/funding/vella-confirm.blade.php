@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
<<<<<<< HEAD
        <div class="col-md-8 offset-md-2 flex flex-direction-column justify-center text-center border p-5">
          <div class="row">
            <div class="rol-12">
            <h3>Confirmation @if($vella->status == "pending") in Progress @else Completed @endif</h3>
            <img class="p-3" src="{{$vella->status == 'pending' ? 'https://i.gifer.com/ZZ5H.gif' : 'https://i.gifer.com/XD4x.gif'}}" alt="" style="width: 200px">
            </div>
          <!-- </div>
            <div class="row flex justify-left text-left"> -->
=======
        <div class="col-md-8 offset-md-2 flex justify-center text-center border p-5" style="flex-direction: column;">
            <h3>Confirmation @if($vella->status == "pending") in Progress @else Completed @endif</h3>
            <img class="p-3" src="{{$vella->status == 'pending' ? '' : 'https://i.gifer.com/XD4x.gif'}}" alt="" style="width: 300px">
            <div class="row flex justify-left text-center">
>>>>>>> masterclem
                <div class="col-12">Amount: {{strtoupper($vella->currency->symbol)}}{{$vella->amount}}</div>
                <div class="col-12">Status: {{ucfirst($vella->status)}}</div>
                
                <a href="/">
                    <button class="btn btn-primary w-25 m-5">Home</button>
                </a>
            </div>
        </div>
    </div>
</div>

@if($vella->status == "pending")
<script>
    setInterval(() => {
        location.reload();
    }, 5000)
</script>
@endif

@endsection