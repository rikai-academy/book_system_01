<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController as HomePageController1;
use App\Http\Controllers\BookController as BookController1;
use App\Http\Controllers\ReviewController as ReviewController1;
use App\Http\Controllers\CommentController as CommentController1;
use App\Http\Controllers\ProfileController as ProfileController1;
use App\Http\Controllers\UserController as UserController1;

use App\Http\Controllers\Admin\HomeController as HomeController1;
use App\Http\Controllers\Admin\BookController as BookController2;
use App\Http\Controllers\Admin\CategoryController as CategoryController1;
use App\Http\Controllers\Admin\UserController as UserController2;
use App\Http\Controllers\Admin\ProfileController as ProfileController2;
use App\Http\Controllers\Admin\CartController as CartController2;
use App\Http\Controllers\Admin\LoginController as LoginController2;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ChangeController as ChangeController1;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
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
    return view('users.home');
})->name('index');

Route::middleware(['auth'])->group(function () {
    Route::resource('activity', ActivityController::class);
});

Route::get('language/{language}', [App\Http\Controllers\LanguageController::class, 'language'])->name('language.index');
Route::resource('review', ReviewController1::class)->only('show');
Route::resource('book', BookController1::class);
Route::resource('home', HomePageController1::class);
Route::resource('comment', CommentController1::class)->only('show');
Auth::routes();
Route::get('search', [BookController1::class, 'search'])->name('search');


Route::middleware(['users'])->group(function () {
    Route::get('addreview/{id}', [BookController1::class, 'addreview'])->name('add.review');
    Route::resource('review', ReviewController1::class)->except('show');
    Route::resource('profile', ProfileController1::class);
    Route::resource('comment', CommentController1::class)->except('show');
    Route::get('profile/favoritebook/{id}', [ProfileController1::class, 'favoriteBook'])->name('profile.favorite');
    Route::get('checkout', [CartController::class, 'checkout']);
    Route::get('profile/ratebook/{id}', [ProfileController1::class, 'rateBook']);
    Route::get('profile/timeline/{id}', [ProfileController1::class, 'timeLine']);
    Route::put('change_password', [ChangeController1::class, 'changePassword'])->name('change.password');
    Route::put('change_image', [ChangeController1::class, 'changeImage'])->name('change.image');
    Route::get('listuser',[ProfileController1::class,'listuser'])->name('listuser');
    Route::get('like/review/{reviewid}',[ReviewController1::class,'likereview'])->name('like.review');
    Route::get('unlike/review/{reviewid}',[ReviewController1::class,'unlikereview'])->name('unlike.review');
    Route::get('like/comment/{commentid}',[CommentController1::class,'likecomment'])->name('like.comment');
    Route::get('unlike/comment/{commentid}',[CommentController1::class,'unlikecomment'])->name('unlike.comment');
    Route::get('follow/{userid}/{followid}',[UserController1::class,'follow'])->name('follow');
    Route::get('unfollow/{userid}/{followid}',[UserController1::class,'unfollow'])->name('unfollow');
    Route::resource('timeline', ActivityController::class);
    Route::resource('cart', CartController::class);
    Route::resource('cartItem', CartItemController::class);
    Route::get('current_cart', [CartController::class, 'currentCart']);
    Route::get('cancel/{id}', [CartController::class, 'cancel']);
    Route::put('updateTotal/{id}', [CartController::class, 'updateTotal']);
});


Route::resource('timeline', ActivityController::class);


Route::group(['prefix'=>'admin','middleware' => ['admin']], function(){
    Route::resource('homeadmin',HomeController1::class);
    Route::resource('bookadmin',BookController2::class);
    Route::resource('category',CategoryController1::class);
    Route::resource('user',UserController2::class);
    Route::resource('profile',ProfileController2::class);
    Route::resource('cart',CartController2::class);

    Route::get('buybook',[UserController2::class,'buybook']);
    Route::get('profile/{id}/edit',[ProfileController2::class,'edit']);
    Route::get('logout', [LoginController2::class, 'logout'])->name('admin.logout');
});
Route::get('admin/login',[LoginController2::class,'index'])->name('admin.index');
Route::post('admin/login', [LoginController2::class, 'postLogin'])->name('admin.login');


