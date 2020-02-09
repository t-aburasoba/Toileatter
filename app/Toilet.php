<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toilet extends Model
{
    protected $fillable = [
        'toilet_name',
        'closet_bowl_number',
        'toilet_image_name',
        'latitude',
        'longtitude',
        'station_id',
    ];

    public function scopePublished($query){
        $query->where('published_at', '<=', Carbon::now());
    }

    public function totalization(){
        return $this->hasOne('\App\Totalization');
    }

    public function station(){
        return $this->belongsTo('\App\Station');
    }

    public function post(){
        return $this->hasMany(\App\Post::class);
    }

    public function likes(){
        return $this->hasMany(\App\Like::class);
    }

}
