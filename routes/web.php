<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\SlideController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('frontend.pages.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' =>'admin'],function(){ 
    Route::resource('blog', BlogController::class);
    Route::resource('slide', SlideController::class);
    Route::resource('about', AboutController::class);
    Route::resource('accounts', AccountController::class);
    Route::resource('notice', NoticeController::class);
 });
