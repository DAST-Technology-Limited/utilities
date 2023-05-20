<?php

use App\Http\Controllers\DastPagesController;
use App\Http\Controllers\LanguageController;
use App\Http\Middleware\DomainCheck;
use App\Http\Middleware\TokenAuth;
use Illuminate\Support\Facades\Route;
use App\Mail\SendEmail;
use App\Models\MailSender;
use Illuminate\Routing\RouteRegistrar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/email', function () {
   
    return view('emails.mail');
});


Route::get('email-test', function(){
    $details['email'] = "iyidaclem@gmail.com";
    $details['title'] = "WELCOME MESSAGE";
    $details['banner'] = "https://dast.tech/assets/images/key.png";
    $details['name'] = "Clement";
    $details['body'] = "I'm so excited to invite to DAST SPECIAL LAUCNH WITH INVESTOR";
    dispatch(new App\Jobs\SendEmailJob($details));
    echo("Sent");
    });

    ////dast pages route
    Route::get('/dast-about',[DastPagesController::class,'about']);
    Route::get('/dast-app',[DastPagesController::class,'app']);
    Route::get('/dast-chat',[DastPagesController::class,'chat']);
    Route::get('/dast-pay',[DastPagesController::class,'pay']);
    Route::get('/dast-contact',[DastPagesController::class,'contact']);
    Route::get('/dast-partners',[DastPagesController::class,'partners']);
    Route::get('/dast-lab',[DastPagesController::class,'lab']);





