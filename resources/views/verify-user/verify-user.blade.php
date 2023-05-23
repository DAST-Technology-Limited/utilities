@extends("layouts.app")

@section("content")

@livewire("verify-user.verify-user", ["tg_id" => $tg_id, "token" => $token])

@endsection