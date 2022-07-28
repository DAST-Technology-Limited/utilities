<?php

use App\Http\Middleware\DomainCheck;
use App\Http\Middleware\TokenAuth;
use Illuminate\Support\Facades\Route;
use App\Mail\SendEmail;
use App\Models\MailSender;

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
