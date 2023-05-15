<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\SendEmail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('email-test', function(){
//     $details['email'] = "iyidaclem@gmail.com";
//     $details['title'] = "WELCOME MESSAGE";
//     $details['banner'] = "https://dast.tech/assets/images/key.png";
//     $details['name'] = "Clement";
//     $details['body'] = "I'm so excited to invite to DAST SPECIAL LAUCNH WITH INVESTOR";
//     dispatch(new App\Jobs\SendEmailJob($details));
//     echo("Sent");
//     });


    Route::post('/sendmail', [App\Http\Controllers\MailController::class, 'send'])->name('sendmail');
    Route::post('/sendsms', [App\Http\Controllers\SMSController::class, 'send'])->name('sendsms');
    Route::post('/subscribe', [App\Http\Controllers\SubscribersController::class, 'send'])->name('subscribe');

    // Route::get('/user/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('show');
    // Route::post('/user', [App\Http\Controllers\Controller::class, 'store'])->name('store');
    // Route::put('/user/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('update');
    // Route::delete('/user/{user}', [App\Http\Controllers\UserController::class, 'delete'])->name('delete');


    // Other end points
    require_once "chatgpt.php";
    require_once "telegram.php";