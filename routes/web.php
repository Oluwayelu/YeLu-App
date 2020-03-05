<?php

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', 'MainController@index');
Route::post('/login/checklogin', 'MainController@checklogin');
Route::post('/login/successlogin', 'MainController@successlogin');
Route::get('/register', 'MainController@register');

Route::resource('posts', 'PostsController');

Route::post('/contact/submit', 'MessagesController@submit');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
