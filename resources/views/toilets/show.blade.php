@extends('layouts.app')
@section('content')


<div class="container mb-5 mt-5">

    <div class="row">
        <div class="col-md-5 showcenter" style="padding-top: 50px;">
            <h1 class="fsm">{{ $toilet->toilet_name }}</h1>
            <p>総チェックイン数：{{ $totalization->total_users }}件/ ホームから{{ $totalization->distance }}</p>
            <div class="col-md-4">
                <a class="cp_btn mb-3" href=" {{route('posts.create', ['toilet_id' => $toilet->id])}} ">投稿する</a>
            </div>
        </div>
        <div class="col-md-7">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active p-0 mb-2">
                        <img class="d-block" src="https://res.cloudinary.com/dlalfv68e/image/upload/v1571889673/sjcjpfap9wgpppenjoqs.jpg" alt="First slide" style="width: 100%; object-fit: cover; height: 250px;">
                    </div>
                    @foreach ($posts as $post)
                        @if($post->toilet_image_name != null)
                            <div class="carousel-item p-0">
                                <img class="d-block m-auto" src="{{ $post->toilet_image_name }} " alt="Second slide" style="width: 100%; object-fit: cover; height: 250px;">
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
            </div>
        </div>
    </div>
</div>
<div class="container">
    <hr class="my-4">
    <div class="row">
        <div class="col-md-12">
            <div id="map" style="width: 100%; height: 250px;"></div>
                <script>
                var map;
                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: {{ $toilet->latitude }}, lng: {{ $toilet->longtitude }}},
                    zoom: 20
                    });
                }
                </script>
            </div>
        </div>
    </div>

<div class="container showcenter">
    <hr class="mt-5 mb-5">
    <div class="row">
        {{-- <div class="col-md-4"></div> --}}
        <div class="col-md-12">
            <h2 class="fsm">男女別の評価一覧</h2>
        </div>
        {{-- <div class="col-md-4"></div> --}}
    </div>
    @if($totalization->total_users != 0)
    <div class="row mt-4 ">
        <div class="col-md-6">
            <div class="cardcircle mb-3" style="max-width: 540px; background-color: #2A293E;
            border: none;">
                <div class="row no-gutters">
                    <div class="col-md-4 cardtitle">
                        <h5 class="card-title" style="color: #eee;">Male</h5>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-0">
                            <p class="card-text fss mb-1" style="color: #eee;">すぐ入れる確率（男性）：{{ $totalization->probability_enter_male }}％</p>
                            <p class="card-text fss mb-1" style="color: #eee;">綺麗さ（男性）：{{ $totalization->beautifulness_male }}</p>
                            <p class="card-text fss mb-1" style="color: #eee;">個室の数（男性）：{{ $totalization->number_male }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($posts as $post) 
            @if($post->user->gender == "Male")
            <div class="cardcircle mb-3" style="max-width: 540px; background-color: #2A293E;">
                <div class="row no-gutters">
                    <div class="col-md-4" class="position: relative;">
                        @if($post->user->avatar != null)
                        <img class="card-img-top, img-thumbnail imgavator" src="{{ $post->user->avatar }}" style="object-fit: cover; width: 40%; border-radius: 100%; position: absolute; top: 50%; left: 50%;-webkit-transform : translate(-50%,-50%); transform : translate(-50%,-50%);">
                        @else
                        <img src=" {{ $post->user->user_image }} " class="card-img-top, img-thumbnail imgavator" alt="{{ $post->user->name }}の画像" style="object-fit: cover; width: 40%; border-radius: 100%; position: absolute; top: 50%; left: 50%;-webkit-transform : translate(-50%,-50%); transform : translate(-50%,-50%);">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="card-body profile p-0">
                            <div class="row profileposition">
                                <div class="col-md-4">
                                    <h5 class="card-title fsm" style="color: #eee; font-size: 14px;">{{$post->user->name}}<br>{{$post->user->gender}}</h5>
                                </div>
                                <div class="col-md-8">
                                    <p class="card-text fss" style="color: #eee"> 個室の数：{{$post->closet_bowl_number}} </p>
                                    <p class="card-text fss" style="color: #eee;"> 綺麗ですか：{{$post->beautifulness}} </p>
                                    <p class="card-text fss" style="color: #eee;"> 並びましたか：{{$post->quickly_enter}} </p>
                                    <p class="card-text fss" style="color: #eee;"> ホームから：{{$post->distance}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <div class="col-md-6">
            <div class="cardcircle mb-3" style="max-width: 540px; background-color: #2A293E;
            border: none;">
                    <div class="row no-gutters">
                        <div class="col-md-4 cardtitle">
                            <h5 class="card-title" style="color: #eee;">Female</h5>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-0 ">
                                <p class="card-text fss mb-1" style="color: #eee;">すぐ入れる確率（女性）：{{ $totalization->probability_enter_female }}％</p>
                                <p class="card-text fss mb-1" style="color: #eee;">綺麗さ（女性）：{{ $totalization->beautifulness_female }}</p>
                                <p class="card-text fss mb-1" style="color: #eee;">個室の数（女性）：{{ $totalization->number_female }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @foreach ($posts as $post) 
            @if($post->user->gender == "Female")
            <div class="cardcircle mb-3" style="max-width: 540px; background-color: #2A293E;">
                <div class="row no-gutters">
                    <div class="col-md-4" class="position: relative;">
                        @if($post->user->avatar != null)
                        <img class="card-img-top, img-thumbnail imgavator" src="{{ $post->user->avatar }}" style="object-fit: cover; width: 40%; border-radius: 100%; position: absolute;top: 50%; left: 50%;-webkit-transform : translate(-50%,-50%);transform : translate(-50%,-50%);">
                        @else
                        <img src=" {{ $post->user->user_image }} " class="card-img-top, img-thumbnail imgavator" alt="{{ $post->user->name }}の画像" style="object-fit: cover; width: 40%; border-radius: 100%; position: absolute; top: 50%; left: 50%;-webkit-transform : translate(-50%,-50%); transform : translate(-50%,-50%);">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="card-body profile p-0">
                            <div class="row profileposition">
                                <div class="col-md-4">
                                    <h5 class="card-title fsm" style="color: #eee; font-size: 14px;">{{$post->user->name}}<br>{{$post->user->gender}}</h5>
                                </div>
                                <div class="col-md-8">
                                    <p class="card-text fss" style="color: #eee;"> 個室の数：{{$post->closet_bowl_number}} </p>
                                    <p class="card-text fss" style="color: #eee;"> 綺麗ですか：{{$post->beautifulness}} </p>
                                    <p class="card-text fss" style="color: #eee;"> 並びましたか：{{$post->quickly_enter}} </p>
                                    <p class="card-text fss" style="color: #eee;"> ホームから：{{$post->distance}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-md-12">
            <p>まだ評価はありません。初めての投稿は誰の手に！！</p>
        </div>
    </div>
    @endif
</div>

@endsection
