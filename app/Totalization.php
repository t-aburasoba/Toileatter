<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Totalization extends Model
{
    protected $fillable = [

        'probability_enter_male',
        'probability_enter_female',
        'total_users',
        'beautifulness_male',
        'beautifulness_female',
        'number_male',
        'number_female',
        'distance',
        'evaluation',
        'toilet_id',

    ];

    public function toilet(){
        return $this->belongsTo('\App\Toilet');
    }

    public function post(){
        return $this->hasMany('App\Post');
    }

}
