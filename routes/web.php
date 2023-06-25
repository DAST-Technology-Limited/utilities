<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DastPagesController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\URL;

use App\Http\Controllers\ImageController;
use App\Http\Controllers\Funding\VellaFinanceController;
use App\Http\Controllers\HomeController;
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


// Funding
Route::middleware(["auth"])->group(function () {
    Route::get("/funding", function () {
        return view("funding.index");
    });
    
    Route::get("/funding/confirm", [VellaFinanceController::class, "confirmPayment"]);
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//image upload
Route::get('/img', [ImageController::class, 'create']);
Route::post('/image', [ImageController::class, 'store']);
/////Blog Routing
Route::get('/dast-blog',[BlogController::class,'index']);
Route::get('/blogs',[BlogController::class,'blogs']);


// auth middleware for blogs
Route::middleware(['auth'])->group(function () {
    Route::get('/create', [BlogController::class, 'create']);
    Route::get('/show/{id}', [BlogController::class, 'show']);
    Route::post('/store', [BlogController::class, 'store']);
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::get('/admin', [BlogController::class, 'admin']);
    Route::put('/blogs/{id}/approve', [BlogController::class, 'approve'])->name('blogs.approve');
    
    Route::put('/blogs/{id}/set-pending', [BlogController::class, 'setPending'])->name('blogs.set-pending');
    
    Route::post('/blogs/{id}/like', [BlogController::class, 'like'])->name('blogs.like');
    Route::post('/blogs/{id}/dislike', [BlogController::class, 'dislike'])->name('blogs.dislike');
    
    // comments routing
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    
    // reply route
    Route::post('/reply/{comment_id}', [CommentController::class, 'reply'])->name('reply.store');
    // fetching replies
    Route::get('/comments/{commentId}/replies', [CommentController::class, 'showReplies'])->name('comments.replies');
    
    // delete comment
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
    Route::get('/view_replies/{id}', [CommentController::class, 'view_replies'])->name('view_replies');
    // edit comment
    Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
    // update comment
    Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
    
    Route::get('/xclusive', [CommentController::class, 'xclusive']);
    // admin actions
    Route::get('/users/update-level/{user}', [CommentController::class, 'updateLevel'])->name('users.updateLevel');
    
    Route::put('/users/demote-level/{user}', [CommentController::class, 'demoteLevel'])->name('users.demoteLevel');
    // search users
    Route::get('/users/search', [CommentController::class, 'searchUsers'])->name('users.search');
});























// Route::get('/create',[BlogController::class,'create']);
// Route::get('/show/{id}',[BlogController::class,'show']);
// Route::post('/store',[BlogController::class,'store']);
// Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');

// Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
// Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
// Route::get('/admin',[BlogController::class,'admin']);
// Route::put('/blogs/{id}/approve', [BlogController::class, 'approve'])->name('blogs.approve');

// Route::put('/blogs/{id}/set-pending', [BlogController::class, 'setPending'])->name('blogs.set-pending');

// Route::post('/blogs/{id}/like', [BlogController::class, 'like'])->name('blogs.like');
// Route::post('/blogs/{id}/dislike', [BlogController::class, 'dislike'])->name('blogs.dislike');


// //comments routing
// Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

// ///reply route
// Route::post('/reply/{comment_id}', [CommentController::class, 'reply'])->name('reply.store');
// //fetching replies
// Route::get('/comments/{commentId}/replies', [CommentController::class, 'showReplies'])->name('comments.replies');


// ///delete comment
// Route::delete('/comments/{comment}',[CommentController::class,'destroy'])->name('comments.destroy');
// Route::get('/view_replies/{id}', [CommentController::class, 'view_replies'])->name('view_replies');
// ///edit comment
// Route::get('/comments/{comment}/edit', [CommentController::class,'edit'])->name('comments.edit');
// //update comment
// Route::put('/comments/{comment}', [CommentController::class,'update'])->name('comments.update');

// Route::get('/xclusive', [CommentController::class, 'xclusive']);
// // admin actions
// Route::get('/users/update-level/{user}', [CommentController::class,'updateLevel'])->name('users.updateLevel');

// Route::put('/users/demote-level/{user}', [CommentController::class,'demoteLevel'])->name('users.demoteLevel');
// ///search users
// Route::get('/users/search', [CommentController::class,'searchUsers'] )->name('users.search');

Route::get('/two-places-back', function () {
    $previousUrl = URL::previous(2); // Get the URL of two places back

    return redirect($previousUrl);
});







