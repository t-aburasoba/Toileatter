@extends('layouts.app')

@section('content')

<section class="ScreenIndex p-5" >
    <div class="bg-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center title">
                    @isset($search_result)
                    <h1 style="color: #eee;">{{$search_result}}</h1>
                    @else
                    <h1 style="color: #eee;">あなたの投稿が腹痛民を救います。</h1>
                    <p class="mb-0" style="color: #eee;">Toileatter（トイレアッター）は駅構内のトイレを評価しシェアするアプリです。</p>                    
                    @endisset
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="contain m-0">
        <div class="row">

            {{-- <div class="col-md-12 p-0">
                <div class="loop_box">
                    <div class="loop">
                    </div>
                </div> --}}

                {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item p-0" style="display: inline-block; width:33%;">
                                <img class="d-block m-auto" src="../storage/image/default.jpeg" alt="First slide">
                            </div>

                            @foreach ($toilets as $toilet)
                                @if($i >= 2)
                                @endif
                                    @if($toilet->toilet_image_name != null)
                                        <div class="carousel-item active p-0" style="display: inline-block; width: 33%;">
                                            <img class="d-block m-auto" src="{{ asset('storage/image/'.$toilet->toilet_image_name) }} " alt="Second slide">
                                        </div>
                                    @endif
                            @endforeach
                        </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div> --}}
            {{-- </div> --}}
        </div>
    </div>
</section>

<section>
    <div class="container index_main">
        <div class="row mt-5">
            <div class="col-md-12">
                <p>山手線のトイレ</p>
            </div>
        </div>
        
        <div class="row">
            @foreach($toiletsrand as $toilet)
            <div class="col-md-4 card-wrap p-0">
                <a href="{{ route('toilet.show', $toilet->id ) }}">
                    <h5 class="card-title" style="background-color: #444;">{{ $toilet->toilet_name }}</h5>
                    <small class="card-text" style="backgroud-color: #444;">すぐ入れる確率(男性)：{{ $toilet->totalization->probability_enter_male }}％</small>
                    <h6 class="card-text" style="background-color: #444;">すぐ入れる確率(女性)：{{ $toilet->totalization->probability_enter_female }}％</h6>
                    @if($toilet->toilet_image_name != null)
                        <img src=" {{ $toilet->toilet_image_name }} " class="card-img-top p-0" alt="トイレの画像" style="object-fit: cover; height: 250px;">
                    @else
                        <img src="https://res.cloudinary.com/dlalfv68e/image/upload/v1571889673/sjcjpfap9wgpppenjoqs.jpg" class="card-img-top p-0" alt="トイレの画像" style="object-fit: cover; height: 250px;">
                    @endif
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section>
    <div class="container index_main_small">
        <hr class="mt-5">
        <div class="row mt-5">
            <div class="col-md-12">
                <p class="fsm">最近の投稿</p>
            </div>
        </div>
        <div class="row">
                @foreach($posts as $post)
                <div class="col-md-3 card-wrap-small p-0">
                    <a href="{{ route('toilet.show', $post->toilet->id ) }}">
                        <small class="card-text" style="background-color: #444;">{{ $post->toilet->toilet_name }}</small>
                        @if($post->toilet_image_name != null)
                            <img src=" {{ $post->toilet_image_name }} " class="card-img-top p-0" alt="トイレの画像" style="object-fit: cover; height: 150px;">
                        @else
                            <img src="https://res.cloudinary.com/dlalfv68e/image/upload/v1571889673/sjcjpfap9wgpppenjoqs.jpg" class="card-img-top p-0" alt="トイレの画像" style="object-fit: cover; height: 150px;">
                        @endif
                    </a>
                </div>
                @endforeach
            </div>
        <hr class="my-5">
    </div>
</section>
@auth
<section>
    <div class="container index_main_small">
        <div class="row mt-5">
            <div class="col-md-12">
            <p class="fsm">あなたが使いそうなトイレ</p>
            <p class="fss">よく使う路線：{{Auth::user()->route->name}}　　　よく使う駅：{{Auth::user()->station->name}}</p>
            </div>
        </div>
        <div class="row">
            @foreach($toilets as $toilet)
            @if(Auth::user()->station->name == $toilet->station->name)
            <div class="col-md-3 card-wrap-small p-0">
                <a href="{{ route('toilet.show', $toilet->id ) }}">
                    <small class="card-text" style="background-color: #444;">{{ $toilet->toilet_name }}</small>
                    @if($toilet->toilet_image_name != null)
                        <img src=" {{ $toilet->toilet_image_name }} " class="card-img-top p-0" alt="トイレの画像" style="object-fit: cover; height: 150px;">
                    @else
                        <img src="https://res.cloudinary.com/dlalfv68e/image/upload/v1571889673/sjcjpfap9wgpppenjoqs.jpg" class="card-img-top p-0" alt="トイレの画像" style="object-fit: cover; height: 150px;">
                    @endif
                </a>
            </div>
            @endif
            @endforeach
        </div>
        <hr class="my-5">
    </div>
</section>
@endauth
@endsection


    <div class="container" >
        @section('content')

            <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">山手線トイレ</h2>        
            @isset($search_result)
                <h5 class="card-title"> {{ $search_result }} </h5>
            @endisset
            <hr class="mt-2 mb-5">
            <div class="row text-center text-lg-left">

                @foreach($toilets as $toilet)

                <div class="col-lg-3 col-md-4 col-6 index">
                    {{-- <p href="#" class="d-block mb-4 h-100"> --}}
                        <h5 class="card-title">{{ $toilet->toilet_name }}</h5>
                        @if($toilet->totalization->toilet_image_name != null)
                        <img src=" {{ $toilet->totalization->toilet_image_name }} " class="card-img-top" alt="トイレの画像" style="object-fit: cover; height: 200px; width: 200px;">
                        @else
                            <img src="https://res.cloudinary.com/dlalfv68e/image/upload/v1571889673/sjcjpfap9wgpppenjoqs.jpg" class="card-img-top, img-thumbnail" alt="トイレの画像" style="object-fit: cover; height: 200px; width: 200px;">
                        @endif
                        <div class="card-body">
                            <p class="card-text">すぐ入れる確率(男性)：{{ $toilet->totalization->probability_enter_male }}％</p>
                            <p class="card-text">すぐ入れる確率(女性)：{{ $toilet->totalization->probability_enter_female }}％</p>
                            <p class="card-text">総コメント数：{{ $toilet->totalization->total_users }}</p>
                            <p class="card-text">綺麗さ（男性）：{{ $toilet->totalization->beautifulness_male }}</p>
                            <p class="card-text">綺麗さ（女性）：{{ $toilet->totalization->beautifulness_female }}</p>
                            <p class="card-text">ホームから：{{ $toilet->totalization->distance }}</p>
                            <a href="{{ route('toilet.show', $toilet->id ) }}" class="cp_btn">詳細</a>
                        </div>
                    {{-- </p> --}}
                </div>
                @endforeach
            </div>
        @endsection
    </div>

