<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    // public $timestamps = false;

    protected $fillable = [
        'closet_bowl_number',
        'toilet_image_name',
        'beautifulness',
        'quickly_enter',
        'distance',
        'user_id',
        'toilet_id',
    ];

    public function totalization(){
        return $this->belongsTo('\App\Totalization');
    }

    public function toilet(){
        return $this->belongsTo('\App\Toilet');
    }

    public function user(){
        return $this->belongsTo('\App\User');
    }
}