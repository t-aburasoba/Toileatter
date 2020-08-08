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
Route::resource('posts', 'PostsController');
Route::resource('toilet', 'Toiletcontroller');
Route::resource('totalization', 'TotalizationController');
Route::resource('mypage', 'MypageController');
Route::resource('user', 'UsersController');
Auth::routes();
Route::get('/', 'MypageController@index');

Route::POST('/search', 'PostsController@search')->name('posts.search');

Route::get('auth/twitter', 'Auth\AuthController@TwitterRedirect')->name("twitter.login");
Route::get('auth/twitter/callback', 'Auth\AuthController@TwitterCallback');
Route::get('auth/twitter/logout', 'Auth\AuthController@getLogout');
Route::get('auth/line', 'Auth\AuthController@LineRedirect')->name("line.login");
Route::get('auth/line/callback', 'Auth\AuthController@LineCallback');
