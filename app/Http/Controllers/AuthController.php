<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SocialUser;
use Auth;
use DB;
use App\Station;
use App\Post;
use App\Route;
use Illuminate\Http\Request;
use Socialite;

class AuthController extends Controller
{
    public function login()
    {
        return Socialite::with('Twitter')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('Twitter')->user();
        dd($user);

    }
}