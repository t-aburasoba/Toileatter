<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'name',
    ];

    public function station(){
        return $this->hasMany('App\Station');
    }

    public function user(){
        return $this->hasMany('App\Models\User');
    }
}
