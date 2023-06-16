<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DastPagesController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Funding\VellaFinanceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Middleware\DomainCheck;
use App\Http\Middleware\TokenAuth;
use Illuminate\Support\Facades\Route;
use App\Mail\SendEmail;
use App\Models\MailSender;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Auth;

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


Route::get('email-test', function () {
    $details['email'] = "iyidaclem@gmail.com";
    $details['title'] = "WELCOME MESSAGE";
    $details['banner'] = "https://dast.tech/assets/images/key.png";
    $details['name'] = "Clement";
    $details['body'] = "I'm so excited to invite to DAST SPECIAL LAUCNH WITH INVESTOR";
    dispatch(new App\Jobs\SendEmailJob($details));
    echo ("Sent");
});

////dast pages route
Route::get('/dast-about', [DastPagesController::class, 'about']);
Route::get('/dast-app', [DastPagesController::class, 'app']);
Route::get('/dast-chat', [DastPagesController::class, 'chat']);
Route::get('/dast-pay', [DastPagesController::class, 'pay']);
Route::get('/dast-contact', [DastPagesController::class, 'contact']);
Route::get('/dast-partners', [DastPagesController::class, 'partners']);
Route::get('/dast-lab', [DastPagesController::class, 'lab']);
Route::get('/dast-armies', [DastPagesController::class, 'army']);


//// User Verification page
Route::get("/verify-user/{id}/{token}", [UserAuthController::class, 'viewVerify']);


// Authenticated routes
Route::middleware(["auth"])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get("/dashboard/funding", function () {
        return view("funding.index");
    });
    Route::get("/funding/confirm", [VellaFinanceController::class, "confirmPayment"]);
    Route::get("/dashboard/tx-history", function(){ return view("funding.tx-history");});
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//image upload
Route::get('/img', [ImageController::class, 'create']);
Route::post('/image', [ImageController::class, 'store']);
/////Blog Routing
Route::get('/dast-blog',[BlogController::class,'index']);
Route::get('/blogs',[BlogController::class,'blogs']);
Route::get('/create',[BlogController::class,'create']);
Route::get('/show',[BlogController::class,'show']);




