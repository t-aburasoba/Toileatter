<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Totalization extends Model
{
    protected $guarded = [
        'id',
    ];

    public function toilet(){
        return $this->hasone('\App\Toilet');
    }

    public function post(){
        return $this->hasMany('App\Post');
    }

}
