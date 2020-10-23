<?php

use App\Http\Controllers\FontendController;
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




Auth::routes();



Route::middleware(['auth','admin'])->group (function(){
    Route::get('admin/dashboard', 'HomeController@index')->name('home');
    Route::resource('admin/categories', 'CategoriesController');
    Route::resource('admin/posts', 'PostController');
    Route::resource('admin/tags', 'TagController');

    Route::get('admin/users','UserController@index')->name('users.index');
    Route::post('admin/users/{user}/make-admin','UserController@makeAdmin')->name('users.make-admin');
});





Route::get('/','FontendController@home')->name('fontends.home');
Route::get('/home','FontendController@home')->name('fontends.home');
// Route::get('/category/{cat}','FontendController@category')->name('fontends.category');
Route::get('category/{category}','FontendController@cat')->name('fontends.cat');
Route::get('posts/{post}','FontendController@post')->name('fontends.post');
// Route::resource('/home', 'Auth\RegisterController');


// Route::get('login', 'AuthController@index');
// Route::post('post-login', 'AuthController@postLogin');
//    Route::post('/home', 'Auth\RegisterController@');
// Route::post('post-register', 'AuthController@postRegister');
// Route::get('dashboard', 'AuthController@dashboard');
// Route::get('logout', 'AuthController@logout');
// Route::post('/abc','FontendController@register')->name('register');

