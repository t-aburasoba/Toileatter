<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    public function index(Request $request){
        $posts = DB::select('select * from toilets');
        
    }
}
