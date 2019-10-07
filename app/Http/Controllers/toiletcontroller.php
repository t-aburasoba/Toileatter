<?php

namespace App\Http\Controllers;

use App\Toilet;
use App\Post;
use Illuminate\Http\Request;

class toiletcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toilets = Toilet::orderBy('created_at', 'desc')->get();

        // dd($toilets);
        return view('toilets.index', ['toilets' => $toilets]);


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

        return view('toilets.show', ['toilet'=>$toilet], ['posts'=>$posts]);
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
