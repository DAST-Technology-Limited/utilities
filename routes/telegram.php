<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/get-updates", [App\Http\Controllers\Telegram\TelegramChatController::class, "getUpdates"]);
Route::post("/pay-updates", [App\Http\Controllers\Telegram\TelegramUtilityController::class, "getUpdates"]);
Route::post("/chat", [App\Http\Controllers\ChatGPT\ChatGPTController::class, "chat"]);