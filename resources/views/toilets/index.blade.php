@extends('layouts.app')

    <div class="container" >
        @section('content')

        {{-- @foreach ($routes as $route)
            


        @endforeach --}}

            <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">山手線トイレ</h2>        
            <hr class="mt-2 mb-5">
            <div class="row text-center text-lg-left">
                @isset($search_result)
                    <h5 class="card-title"> {{ $search_result }} </h5>
                @endisset

                @foreach($toilets as $toilet)

                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img src=" {{ asset('storage/image/'.$toilet->totalization->toilet_image_name) }} " class="card-img-top" alt="トイレの画像" style="object-fit: cover; height: 200px; width: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $toilet->toilet_name }}</h5>
                            <p class="card-text">すぐ入れる確率：{{ $toilet->totalization->probability_enter }}％</p>
                            <p class="card-text">総コメント数：{{ $toilet->totalization->total_users }}</p>
                            <p class="card-text">綺麗さ：{{ $toilet->totalization->beautifulness }}</p>
                            <p class="card-text">ホームから：{{ $toilet->totalization->distance }}</p>
                            <a href="{{ route('toilet.show', $toilet->id ) }}" class="btn btn-primary">詳細</a>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        @endsection
    </div>

