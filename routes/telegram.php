<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/get-updates", [App\Http\Controllers\Telegram\TelegramChatController::class, "getUpdates"]);
Route::post("/pay-updates", [App\Http\Controllers\Telegram\TelegramUtilityController::class, "getUpdates"]);

Route::get("/set-webhook", [App\Http\Controllers\Telegram\TelegramUtilityController::class, "setWebHook"]);
Route::get("/delete-webhook", [App\Http\Controllers\Telegram\TelegramUtilityController::class, "deleteWebHook"]);