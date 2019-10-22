<?php

namespace App\Http\Controllers;

use App\Toilet;
use App\Post;
use App\Station;
use App\Totalization;
use Illuminate\Http\Request;

class Toiletcontroller extends Controller
{
    /**
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')
            ->except(['index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toilets = Toilet::inRandomOrder()->take(6)->get();
        $stations = Station::all();
        $totalizations = Totalization::all();
        $posts = Post::orderBy('created_at', 'desc')->take(8)->get();
        // dd($totalizations);
        
        return view('toilets.index', ['toilets' => $toilets, 'stations' => $stations, 'totalizations' => $totalizations, 'posts' => $posts]);


        // $posts = DB::select('select * from toilets');
        // return view('posts.index', ['posts'=> $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $toilet = Toilet::all()->where('id', $id)->first();
        $posts = Post::all()->where('toilet_id', $id)->sortByDesc('created_at');
        $totalization = Totalization::all()->where('toilet_id', $id)->first();

        return view('toilets.show', ['toilet'=>$toilet,'posts'=>$posts, 'totalization'=>$totalization]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
