<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/chatgpt", [App\Http\Controllers\ChatGPT\ChatGPTController::class, "chat"]);