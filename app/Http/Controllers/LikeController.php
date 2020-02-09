<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Toilet;
use App\Like;

class LikeController extends Controller
{
    public function like(Toilet $toilet, Request $request){
        $like = new Like;
        $like->user_id = $request->user_id;
        $like->toilet_id = $request->toilet_id;
        $like->save();

        $likeCount = count(Like::where('toilet_id', $request->toilet_id)->get());
        return response()->json(['likeCount' => $likeCount]); 
    }

    public function unlike(Toilet $toilet, Request $request){
        $like = Like::where('user_id', $request->user_id)->where('toilet_id', $request->toilet_id)->first();
        $like->delete();

        $likeCount = count(Like::where('toilet_id', $request->toilet_id)->get());
        
        return response()->json(['likeCount' => $likeCount]); 
    }
}
