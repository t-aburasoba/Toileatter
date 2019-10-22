<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $fillable = [
        'name',
        'route_id'
    ];

    public function toilet(){
        return $this->hasMany('\App\Toilet');
    }

    public function user(){
        return $this->hasMany('\App\Models\User');
    }

    public function route(){
        return $this->belongsTo('\App\Route');
    }
}
