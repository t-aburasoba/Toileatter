@extends('layout')
    
    <div class="container">
        @section('content')

            <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">最近投稿されたトイレ</h2>        
            <hr class="mt-2 mb-5"> 
            <div class="row text-center text-lg-left">
                    
                {{-- @foreach($totalizations as $totalization)
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img src="..." class="card-img-top" alt="トイレの画像">
                        <div class="card-body">
                            <h5 class="card-title">評価：{{ $totalization->evaluation }}点</h5>
                            <p class="card-text">すぐ入れる確率：{{ $totalization->probability_enter }} ％</p>
                            <a href="{{ route('totalization.show', $totalization->id ) }}" class="btn btn-primary">詳細</a>
                        </div>
                    </a>
                </div>
                @endforeach --}}
            </div>

            <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">あなたが投稿したトイレ</h2>        
            <hr class="mt-2 mb-5"> 
            <div class="row text-center text-lg-left">
                    
                {{-- @foreach($totalizations as $totalization)
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img src="..." class="card-img-top" alt="トイレの画像">
                        <div class="card-body">
                            <h5 class="card-title">評価：{{ $totalization->evaluation }}点</h5>
                            <p class="card-text">すぐ入れる確率：{{ $totalization->probability_enter }} ％</p>
                            <a href="#" class="btn btn-primary">詳細</a>
                        </div>
                    </a>
                </div>
                @endforeach --}}
            </div>
        @endsection
    </div>

