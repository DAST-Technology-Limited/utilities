<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/get-updates", [App\Http\Controllers\Telegram\TelegramController::class, "getUpdates"]);
