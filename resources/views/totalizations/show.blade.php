@extends('layout')


<div class="container">
    
    @section('content')
        <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">あなたにオススメのトイレ</h2>        
        <hr class="mt-2 mb-5"> 
        <div class="row text-center text-lg-left">
                
            <div class="col-lg-3 col-md-4 col-6">
                <a href="#" class="d-block mb-4">
                    <img src="..." class="card-img-top" alt="トイレの画像">
                    <div class="card-body">
                        <h5 class="card-title">個室の数：{{$totalization->evaluation}}</h5>
                        <p class="card-text">チェックイン数：{{$totalization->total_users}}</p>
                        <p class="card-text">並ばない確率:{{$totalization->probability_enter}}</p>
                    </div>
                </a>
            </div>
        </div>
    @endsection
</div>