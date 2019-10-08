@extends('layouts.app')

<div class="container">
    
    @section('content')
        <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">トイレ詳細</h2>        
        <hr class="mt-2 mb-5"> 
        <div class="row text-center text-lg-left">
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4 h-100">
                    {{-- @if(isset($post->toilet_image)){ --}}
                    @foreach ($posts as $post)
                        @if($post->toilet_image_name !== null)
                            <img src=" {{ asset('storage/image/'.$post->toilet_image_name) }} " class="card-img-top" alt="トイレの画像"style="object-fit: cover; height: 400px; width: 400px;">
                        @endif
                    @endforeach
                    <div class="card-body">
                        <h5 class="card-title">{{ $toilet->toilet_name }}</h5>
                        <p class="card-text">個室の数（管理者調べ）：{{ $toilet->closet_bowl_number }}</p>
                        <p class="card-text">緯度：{{ $toilet->latitude }}</p>
                        <p class="card-text">経度：{{ $toilet->longtitude }}</p>
                    </div>
                </a>
                <a class="btn btn-primary" href=" {{route('posts.create', ['toilet_id' => $toilet->id])}} ">Checkin コメントする</a>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                
                @foreach ($posts as $post)
                <div class="col-md-4">
                    <img src=" {{ asset('storage/image/'.$post->toilet_image_name) }}" class="card-img" alt="トイレ画像" style="object-fit: cover; height: 180px; width: 180px;">
                    {{-- $post->user->img --}}
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->user->name}}</h5>
                        <p class="card-text"> 個室の数：{{$post->closet_bowl_number}} </p>
                        <p class="card-text"> 綺麗ですか：{{$post->beautifulness}} </p>
                        <p class="card-text"> 並びましたか：{{$post->quickly_enter}} </p>
                        <p class="card-text"> ホームから：{{$post->distance}} </p>
                        <p class="card-text">
                        {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                    </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    @endsection
</div>