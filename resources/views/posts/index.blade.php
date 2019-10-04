@extends('layout')
    
    <div class="container">
        @section('content')

            <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">あなたにオススメのトイレ</h2>        
            <hr class="mt-2 mb-5"> 
            <div class="row text-center text-lg-left">
                    
                @foreach($posts as $post)
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img src="..." class="card-img-top" alt="トイレの画像">
                        <div class="card-body">
                            <h5 class="card-title">個室の数：{{ $post->closet_bowl_number }}</h5>
                            <p class="card-text">緯度：{{ $post->latitude }} 経度：{{ $post->longtitude }}</p>
                            <a href="{{ route('posts.show', $post->id ) }}" class="btn btn-primary">詳細</a>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">よく利用する路線のトイレ</h2>        
            <hr class="mt-2 mb-5"> 
            <div class="row text-center text-lg-left">
                    
                @foreach($posts as $post)
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img src="..." class="card-img-top" alt="トイレの画像">
                        <div class="card-body">
                            <h5 class="card-title">個室の数：{{ $post->closet_bowl_number }}</h5>
                            <p class="card-text">緯度：{{ $post->latitude }} 経度：{{ $post->longtitude }}</p>
                            <a href=" {{route('posts.show', $post->id)}} " class="btn btn-primary">詳細</a>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">あなたのトイレ</h2>        
            <hr class="mt-2 mb-5"> 
            <div class="row text-center text-lg-left">
                    
                @foreach($posts as $post)
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img src="..." class="card-img-top" alt="トイレの画像">
                        <div class="card-body">
                            <h5 class="card-title">個室の数：{{ $post->closet_bowl_number }}</h5>
                            <p class="card-text">緯度：{{ $post->latitude }} 経度：{{ $post->longtitude }}</p>
                            <a href=" {{route('posts.show', $post->id)}} " class="btn btn-primary">詳細</a>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        @endsection
</div>

