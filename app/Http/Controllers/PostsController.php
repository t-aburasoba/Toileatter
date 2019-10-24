<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Toilet;
use App\Models\User;
use App\Totalization;
use App\Station;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostRequest;
use JD\Cloudder\Facades\Cloudder;

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
        if(isset($request)) {
            $post = new Post;
            // $input = $request->only($post->getFillable());
            $post->closet_bowl_number = $request->closet_bowl_number;
            $post->beautifulness = $request->beautifulness;
            $post->quickly_enter = $request->quickly_enter;
            $post->distance = $request->distance;
            $post->user_id = $request->user_id; 
            $post->toilet_id = $request->toilet_id;
            $post->gender = $request->gender;

            // if($request->file('toilet_image_name') !== null) {
            //     if($request->file('toilet_image_name')->isValid()){
            //         $filename = $request->file('toilet_image_name')->store('public/image');
            //         $post->toilet_image_name = basename($filename);
            //     }

            $data = $request->all();
            if ($toilet_image_name = $request->file('toilet_image_name')) {
                $image_name = $toilet_image_name->getRealPath();
                // Cloudinaryへアップロード
                Cloudder::upload($image_name, null);
                list($width, $height) = getimagesize($image_name);
                // 直前にアップロードした画像のユニークIDを取得します。
                $publicId = Cloudder::getPublicId();
                // URLを生成します
                $logoUrl = Cloudder::show($publicId, [
                    'width'     => $width,
                    'height'    => $height
                ]);
                $post->toilet_image_name = $logoUrl;
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


            if($post->gender == 'Male'){

                $quickly_enter = Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->where('quickly_enter', 'いいえ')->count();
                $total_users_gender = Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->count();
                $total_users = Post::all()->where('toilet_id', $post->toilet_id)->count();
                $array_beautifulness = Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->mode('beautifulness');
                $array_beautifulness_rand = array_rand($array_beautifulness,1);
                $beautifulness_male = $array_beautifulness[$array_beautifulness_rand];
                $array_distance = Post::all()->where('toilet_id', $post->toilet_id)->mode('distance');
                $array_distance_rand = array_rand($array_distance,1);
                $distance = $array_distance[$array_distance_rand];
                $probability_enter_male = round($quickly_enter / $total_users * 100);
                $number =  Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->pluck('closet_bowl_number')->all();
                $number_sum = array_sum($number);
                $number_male = $number_sum / $total_users_gender;
    
                $totalization=Totalization::updateOrCreate([
                    'toilet_id' => $post->toilet_id
                ], [
                    'probability_enter_male' => $probability_enter_male,
                    'total_users' => $total_users,
                    'beautifulness_male' => $beautifulness_male,
                    'distance' => $distance,
                    'toilet_id' => $request->toilet_id,
                    'number_male' => $number_male
                ]);

            }else{

                $quickly_enter = Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->where('quickly_enter', 'いいえ')->count();
                $total_users_gender = Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->count();
                $total_users = Post::all()->where('toilet_id', $post->toilet_id)->count();
                $array_beautifulness = Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->mode('beautifulness');
                $array_beautifulness_rand = array_rand($array_beautifulness,1);
                $beautifulness_female = $array_beautifulness[$array_beautifulness_rand];
                $array_distance = Post::all()->where('toilet_id', $post->toilet_id)->mode('distance');
                $array_distance_rand = array_rand($array_distance,1);
                $distance = $array_distance[$array_distance_rand];
                $probability_enter_female = round($quickly_enter / $total_users * 100);
                $number =  Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->pluck('closet_bowl_number')->all();
                $number_sum = array_sum($number);
                $number_female = $number_sum / $total_users_gender;
    
                $totalization=Totalization::updateOrCreate([
                    'toilet_id' => $post->toilet_id
                ], [
                    'probability_enter_female' => $probability_enter_female,
                    'total_users' => $total_users,
                    'beautifulness_female' => $beautifulness_female,
                    'distance' => $distance,
                    'toilet_id' => $request->toilet_id,
                    'number_female' => $number_female
                ]);
            }

            // $quickly_enter = Post::all()->where('toilet_id', $post->toilet_id)->where('quickly_enter', 'いいえ')->count();
            // $total_users = Post::all()->where('toilet_id', $post->toilet_id)->count();
            // $array_beautifulness = Post::all()->where('toilet_id', $post->toilet_id)->mode('beautifulness');
            // $array_beautifulness_rand = array_rand($array_beautifulness,1);
            // $beautifulness = $array_beautifulness[$array_beautifulness_rand];
            // $array_distance = Post::all()->where('toilet_id', $post->toilet_id)->mode('distance');
            // $array_distance_rand = array_rand($array_distance,1);
            // $distance = $array_distance[$array_distance_rand];
            // $probability_enter = round($quickly_enter / $total_users * 100);

            // $totalization=Totalization::updateOrCreate([
            //     'toilet_id' => $post->toilet_id
            // ], [
            //     'probability_enter' => $probability_enter,
            //     'total_users' => $total_users,
            //     'beautifulness' => $beautifulness,
            //     'distance' => $distance,
            //     'toilet_id' => $request->toilet_id
            // ]);

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

        if($post->gender == 'Male'){

            $quickly_enter = Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->where('quickly_enter', 'いいえ')->count();
            $total_users_gender = Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->count();
            $total_users = Post::all()->where('toilet_id', $post->toilet_id)->count();
            $array_beautifulness = Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->mode('beautifulness');
            $array_beautifulness_rand = array_rand($array_beautifulness,1);
            $beautifulness_male = $array_beautifulness[$array_beautifulness_rand];
            $array_distance = Post::all()->where('toilet_id', $post->toilet_id)->mode('distance');
            $array_distance_rand = array_rand($array_distance,1);
            $distance = $array_distance[$array_distance_rand];
            $probability_enter_male = round($quickly_enter / $total_users * 100);
            $number =  Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->pluck('closet_bowl_number')->all();
            $number_sum = array_sum($number);
            $number_male = $number_sum / $total_users_gender;

            $totalization=Totalization::updateOrCreate([
                'toilet_id' => $post->toilet_id
            ], [
                'probability_enter_male' => $probability_enter_male,
                'total_users' => $total_users,
                'beautifulness_male' => $beautifulness_male,
                'distance' => $distance,
                'toilet_id' => $post->toilet_id,
                'number_male' => $number_male
            ]);

        }else{

            $quickly_enter = Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->where('quickly_enter', 'いいえ')->count();
            $total_users_gender = Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->count();
            $total_users = Post::all()->where('toilet_id', $post->toilet_id)->count();
            $array_beautifulness = Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->mode('beautifulness');
            $array_beautifulness_rand = array_rand($array_beautifulness,1);
            $beautifulness_female = $array_beautifulness[$array_beautifulness_rand];
            $array_distance = Post::all()->where('toilet_id', $post->toilet_id)->mode('distance');
            $array_distance_rand = array_rand($array_distance,1);
            $distance = $array_distance[$array_distance_rand];
            $probability_enter_female = round($quickly_enter / $total_users * 100);
            $number =  Post::all()->where('gender', $post->gender)->where('toilet_id', $post->toilet_id)->pluck('closet_bowl_number')->all();
            $number_sum = array_sum($number);
            $number_female = $number_sum / $total_users_gender;

            $totalization=Totalization::updateOrCreate([
                'toilet_id' => $post->toilet_id
            ], [
                'probability_enter_female' => $probability_enter_female,
                'total_users' => $total_users,
                'beautifulness_female' => $beautifulness_female,
                'distance' => $distance,
                'toilet_id' => $post->toilet_id,
                'number_female' => $number_female
            ]);
        }

        $totalization->save();

        $toilet = Toilet::all()->where('id', $post->toilet_id)->first();
        $user = User::all()->where('id', $post->user_id)->first();
        $posts = Post::all()->where('toilet_id', $post->toilet_id)->sortByDesc('created_at');

        return redirect('mypage', $post->toilet_id, ['posts'=>$posts, 'toilet'=>$toilet, 'user'=>$user, 'totalization'=>$totalization]);

        // return redirect('mypage');
    }

    public function search(Request $request)
    {
        $stations = Station::all();
        $totalizations = Totalization::all();
        $toilets = Toilet::all();
        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
        $toiletsrand = Toilet::query()
                    ->where('toilet_name', 'like', '%' . $request->search . '%')->get();
                    // dd($toilets);
        $search_result = '「'.$request->search.'」の検索結果'.count($toiletsrand).'件';

        return view('toilets.index', [
            'toilets' => $toilets,
            'toiletsrand' => $toiletsrand,
            'search_result' => $search_result,
            'stations' => $stations, 
            'totalizations' => $totalizations, 
            'posts' => $posts
            ]);
    }
    
}
