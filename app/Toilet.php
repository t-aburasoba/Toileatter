<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toilet extends Model
{
    protected $guarded = [
        'id',
    ];

    public function scopePublished($query){
        $query->where('published_at', '<=', Carbon::now());
    }

    public function totalization(){
        return $this->belongsTo('\App\Totalization');
    }

    public function station(){
        return $this->belongsTo('\App\Station');
    }

    public function post(){
        return $this->hasMany(\App\Post::class);
    }

}
