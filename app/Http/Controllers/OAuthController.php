<?php

namespace App\Http\Controllers;

//ライブラリを使用するための宣言みたいなもの
use Abraham\TwitterOAuth\TwitterOAuth;
use Illuminate\Support\Facades\Input;

//クラス定義
class OAuthController extends Controller{
    //さっきメモったやつを変数に格納
    //本当はenvとかに定義した方が良い
    private $consumerKey = 'QGdny4PZVIaSd3aTkIHBcqxES';
    private $consumerSecret = 'QTNvqzkIM2pKicXaWmpRipwaolP8Ns8ldrI6nKJBMtMoQk9ZDX';
    private $callBackUrl = 'http://127.0.0.1:8000/callback/';

    //アクセスしてTwitterのOAuth認証のページまでリダイレクトするところまで記述する
    public function login(){
      //インスタンス生成
      $twitter = new TwitterOAuth($this->consumerKey, $this->consumerSecret);
  
      //リクエストトークン取得
      //リクエストトークンは認証用のURLを生成するのに必要になります
      //'oauth/request_token'はリクエストークンを取得するためのAPIのリソース
      $request_token = $twitter->oauth('oauth/request_token', array('oauth_callback' => $this->callBackUrl));
  
      //認証用URL取得
      //'oauth/authorize'は認証URLを取得するためのAPIのリソース
      $url = $twitter->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
  
      //認証ページにリダイレクト
      return redirect($url);
  }
    //callBack後の処理について書く(アクセストークンとか取得する)
    public function callBack(){

    }

    //アクセストークンを使用してAPIを叩いて結果をビューに受け渡す
    public function index(){

    }
    //ログアウト処理(今回は最終的にwelcomeページにリダイレクトするようにする)
    public function logout(){

    }
}