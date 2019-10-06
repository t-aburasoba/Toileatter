<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        // dd($posts);
        return view('posts.index', ['posts' => $posts]);


        // $posts = DB::select('select * from toilets');
        // return view('posts.index', ['posts'=> $posts]);
    }

    // public function show($post) {
    //     return $post;
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $q = \Request::query();
        // dd($q['toilet_id']);
        return view('posts.create', [
            'toilet_id' => $q['toilet_id'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        if($request->file('toilet_image_name')->isValid()){
            
            // dd($request->file('toilet_image_name'));
            $post = new Post;
            // $input = $request->only($post->getFillable());
            $post->closet_bowl_number = $request->closet_bowl_number;
            $post->beautifulness = $request->beautifulness;
            $post->quickly_enter = $request->quickly_enter;
            $post->distance = $request->distance;
            
            $filename = $request->file('toilet_image_name')->store('public/image');

            $post->toilet_image_name = basename($filename);

            // dd($post);
            $post->save();

        }

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $post = Post::all();

        // return view('posts.show', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
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
        $post = Post::findOrFail($id);

        $post->update($post->validated());

        return redirect(url('posts', [$post->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect('posts');
    }
}
