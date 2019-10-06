<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    public function toilet(){
        return $this->hasMany('\App\Toilet');
    }

    public function user(){
        return $this->hasMany('\App\User');
    }

    public function route(){
        return $this->belongsTo('\App\Route');
    }
}
