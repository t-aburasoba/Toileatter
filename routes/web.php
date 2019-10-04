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
    return view('mypage');
});

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');

//ログイン認証するためのルーティング
Route::get('/oauth', 'OAuthController@login');

//Callback用のルーティング
Route::get('/callback', 'OAuthController@callBack');

//indexのルーティング
Route::get('/index', 'OAuthController@index');

//logoutのルーティング
Route::get('/logout', 'OAuthController@logout');