@extends('layouts.app')

    
    <div class="container">
        @section('content')

            <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">あなたが投稿したトイレ</h2>        
            <hr class="mt-2 mb-5"> 
            <div class="row text-center text-lg-left">
                    
                @foreach($posts as $post)
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img src=" {{ asset('storage/image/'.$post->toilet_image_name) }} " class="card-img-top" alt="トイレの画像"style="object-fit: cover; height: 200px; width: 200px;">
                        
                        <div class="card-body">
                            <h5 class="card-title">綺麗さ：{{ $post->beautifulness }}</h5>
                            <p class="card-text">すぐ入れた：{{ $post->quickly_enter }}</p>
                            <p class="card-text">ホームから：{{ $post->distance }}</p>
                            <a href="{{ action('PostsController@edit', [$post->id]) }}"
                                class="btn btn-success">編集</a>
                            <a href="{{ route('posts.show', $post->id ) }}" class="btn btn-primary">詳細</a>
                            {!! delete_form(['posts', $post->id]) !!}
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        @endsection
    </div>

