<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController as HomePageController1;
use App\Http\Controllers\BookController as BookController1;
use App\Http\Controllers\ReviewController as ReviewController1;
use App\Http\Controllers\CommentController as CommentController1;
use App\Http\Controllers\ProfileController as ProfileController1;

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
});


Route::get('cart/{id}',[BookController1::class,'cart']);
Route::get('checkout',[BookController1::class,'checkout']);
Route::get('profile/favoritebook/{id}',[ProfileController1::class,'favoriteBook']);
Route::get('profile/ratebook/{id}',[ProfileController1::class,'rateBook']);
Route::get('profile/timeline/{id}',[ProfileController1::class,'timeLine']);
Route::get('language/{language}',[App\Http\Controllers\LanguageController::class, 'language'])->name('language.index');
Route::resource('review',ReviewController1::class);
Route::resource('book',BookController1::class);
Route::resource('home',HomePageController1::class);
Route::resource('profile',ProfileController1::class);
Route::resource('comment',CommentController1::class);