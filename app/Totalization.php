<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Totalization extends Model
{
    protected $fillable = [

        'probability_enter',
        'total_users',
        'beautifulness',
        'distance',
        'evaluation',
        'toilet_id',

    ];

    public function toilet(){
        return $this->hasOne('\App\Toilet');
    }

    public function post(){
        return $this->hasMany('App\Post');
    }

}
