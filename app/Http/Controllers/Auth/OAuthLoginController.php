<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Storage;

class OAuthLoginController extends Controller
{
  public function redirectToProvider($provider){
    return Socialite::driver('twitter')->redirect();
  }
  
  //認証後の処理
  public function handleProviderCallback($provider){
      $user = Socialite::driver('twitter')->user();
      
      //ユーザー作成するかの判定
      $authUser = User::findOrCreateUser($user,$provider);   
      Auth::login($authUser, true);
        
      //$userからリクエストトークンを取得して、sessionに保存
      session()->put('accessToken', [
      'oauth_token'=> $user -> token,
      'oauth_token_secret'=> $user -> tokenSecret
      ]);                     
  
      return redirect('/index');
}
      public static function findOrCreateUser($user,$provider){
          
        //認証ユーザーがデータにあれば変数に代入
        $authUser = User::where('twitter_id',$user->id)->first();
        
        //変数にデータがあればそのままリターン
        if($authUser){
            return $authUser;
        }
        //なければ作成
        return User::create([
            'name' =>$user->name,
            'twitter_name'=>$user->name,
            'twitter_id'=>$user->id,
            'avatar'=>$user->avatar
        ]);
    }
//タイムラインを取得してindexをview
    public function index(){
        
        //timelines取得
        $timelines = Api::getTimelines();  
        
        //errorがある場合welcome画面表示
        if(array_has($timelines,'errors')){
            return view('welcome');
        }else{
        //なければ、リツイートを省いたtimelines取得
        $timelines= array_where($timelines, function ($timeline, $key) {
            return array_has($timeline,'retweeted_status') == false;
        });
        }
        //sessionに保存
        session()->put('timelines',$timelines );  

        return view('index',['timelines'=>$timelines]);
    }
}