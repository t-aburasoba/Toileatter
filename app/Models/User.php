<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password' ,'gender' ,'station_id' ,'route_id' ,'user_image','avatar' ,'twitter_id', 'facebook_id', 'github_id', 'google_id','yahoo_id', 'line_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function station(){
        return $this->belongsTo('App\Station');
    }

    public function post(){
        return $this->hasMany('App\Post');
    }

    public function route(){
        return $this->belongsTo('App\Route');
    }

    public function socialUsers()
    {
        return $this->hasMany(SocialUser::class);
    }

}