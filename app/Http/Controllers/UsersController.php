<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Models\User;
use JD\Cloudder\Facades\Cloudder;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('/', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->validated());

        // if($request->file('user_image') !== null) {
        //     if($request->file('user_image')->isValid()){
        //         $filename = $request->file('user_image')->store('public/image');
        //         $user->user_image = basename($filename);
        //     }  
        // }

        $data = $request->all();
        if ($user_image = $request->file('user_image')) {
            $image_name = $user_image->getRealPath();
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
            $user->user_image = $logoUrl;
        }

        $user->save();

        return redirect(url('/'));
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
