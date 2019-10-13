<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Toilet;
use App\User;
use App\Totalization;
use App\Station;
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
        // dd($request);
        if(isset($request)) {
            $post = new Post;
            // $input = $request->only($post->getFillable());
            $post->closet_bowl_number = $request->closet_bowl_number;
            $post->beautifulness = $request->beautifulness;
            $post->quickly_enter = $request->quickly_enter;
            $post->distance = $request->distance;
            $post->user_id = $request->user_id; 
            $post->toilet_id = $request->toilet_id;

            if($request->file('toilet_image_name') !== null) {
                if($request->file('toilet_image_name')->isValid()){
                    $filename = $request->file('toilet_image_name')->store('public/image');
                    $post->toilet_image_name = basename($filename);
                }
            }
            // dd($post);
            $post->save();

        }

        // $request->session()->regenerateToken();
        // ポスト全部取得
        // dd($user);
        // $posts
            // dd($request->file('toilet_image_name'));
//             $totalization = Totalization::findOrFail('toilet_id' ,$request->toilet_id);
// dd($totalization);
//             $totalization->delete();

//             // $totalization = new Totalization;

//             $total1 = Post::all()->where('toilet_id', $post->toilet_id)->where('quickly_enter', 'はい')->count();
//             $total2 = Post::all()->where('toilet_id', $post->toilet_id)->count();
//             $total3 = Post::all()->where('toilet_id', $post->toilet_id)->mode('beautifulness');
//             $total6 = implode($total3);
//             $total4 = Post::all()->where('toilet_id', $post->toilet_id)->mode('distance');
//             $total7 = implode($total4);
//             $total5 = round($total1 / $total2 * 100);

//             $totalization->probability_enter = $total5;
//             $totalization->total_users = $total2;
//             $totalization->beautifulness = $total6; 
//             $totalization->distance = $total7;
//             $totalization->toilet_id = $request->toilet_id;

            // dd($totalization);

            $quickly_enter = Post::all()->where('toilet_id', $post->toilet_id)->where('quickly_enter', 'いいえ')->count();
            $total_users = Post::all()->where('toilet_id', $post->toilet_id)->count();
            $array_beautifulness = Post::all()->where('toilet_id', $post->toilet_id)->mode('beautifulness');
            $array_beautifulness_rand = array_rand($array_beautifulness,1);
            $beautifulness = $array_beautifulness[$array_beautifulness_rand];
            $array_distance = Post::all()->where('toilet_id', $post->toilet_id)->mode('distance');
            $array_distance_rand = array_rand($array_distance,1);
            $distance = $array_distance[$array_distance_rand];
            $probability_enter = round($quickly_enter / $total_users * 100);

            $totalization=Totalization::updateOrCreate([
                'toilet_id' => $post->toilet_id
            ], [
                'probability_enter' => $probability_enter,
                'total_users' => $total_users,
                'beautifulness' => $beautifulness,
                'distance' => $distance,
                'toilet_id' => $request->toilet_id
            ]);

            $totalization->save();

            $toilet = Toilet::all()->where('id', $post->toilet_id)->first();
            $user = User::all()->where('id', $post->user_id)->first();
            $posts = Post::all()->where('toilet_id', $request->toilet_id)->sortByDesc('created_at');

            return redirect(route('toilet.show', $post->toilet_id, ['posts'=>$posts, 'toilet'=>$toilet, 'user'=>$user, 'totalization'=>$totalization]));
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

        $posts = Post::all()->where('id', $id)->first();

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

        return redirect('mypage');
    }

    public function search(Request $request)
    {
        // dd($request->search);
        // $toilets = Toilet::where('toilet_name', ($request->search))->get();
        // dd($toilets);

        $toilets = Toilet::query()
                    ->where('toilet_name', 'like', '%' . $request->search . '%')->get();
                    // dd($toilets);
        $search_result = '「'.$request->search.'」の検索結果'.count($toilets).'件';

        // $stations = Station::all();
        // $totalizations = Totalization::all();
        // dd($totalizations);
        // dd($search_result);

        return view('toilets.index', [
            'toilets' => $toilets,
            'search_result' => $search_result,
            ]);
    }
    
}
