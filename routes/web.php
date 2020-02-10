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

// Route::get('/', function () {
//     return view('mypage');
// });

Route::resource('posts', 'PostsController');
Route::resource('toilet', 'Toiletcontroller');
Route::resource('totalization', 'TotalizationController');
Route::resource('mypage', 'MypageController');
Route::resource('user', 'UsersController');
Auth::routes();
Route::get('/', 'MypageController@index');
Route::POST('/search', 'PostsController@search')->name('posts.search');

// Route::prefix('auth')->group(function () {
//   Route::get('twitter', 'AuthController@login');
//   Route::get('twitter/callback', 'AuthController@callback');
// });

Route::get('/login/twitter', 'Auth\TwitterController@redirectToProvider')->name("twitter.login");
Route::get('/login/twitter/callback', 'Auth\TwitterController@handleProviderCallback'); 

// Route::get('/login/{social}', 'Auth\OAuthLoginController@socialLogin')->where('social', 'twitter');
// Route::get('/login/{social}/callback', 'Auth\OAuthLoginController@handleProviderCallback')->where('social', 'twitter');

// Route::get('sns/{provider}/login', 'SnsBaseController@getAuth');
// Route::get('sns/{provider}/callback', 'SnsBaseController@authCallback');

// Route::get('/', 'Auth\OAuthLoginController@welcome');
//ログイン:ツイッターの認証にリダイレクト
// Route::get('auth/{provider}', 'Auth\OAuthLoginController@redirectToProvider');
//コールバック
// Route::get('auth/{provider}/callback', 'Auth\OAuthLoginController@handleProviderCallback'); 
//ログアウト
// Route::get('auth/twitter/logout', 'Auth\OAuthLoginController@logout')->name('twitter_logout');
//タイムライン取得
// Route::get('/timelines', 'Auth\OAuthLoginController@index')->name('get_timelines');
//index表示
// Route::get('/index', 'Auth\OAuthLoginController@index')->name('index.show');


// Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');

// //ログイン認証するためのルーティング
// Route::get('/oauth', 'OAuthController@login');

// //Callback用のルーティング
// Route::get('/callback', 'OAuthController@callBack');

// //indexのルーティング
// Route::get('/index', 'OAuthController@index');

// //logoutのルーティング
// Route::get('/logout', 'OAuthController@logout');

