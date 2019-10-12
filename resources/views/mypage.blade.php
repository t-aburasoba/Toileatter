@extends('layouts.app')

    <div class="container">
        @section('content')
        <div class="user_id">
        </div>
        <div class="container">
                <h2>プロフィール編集</h2>
                <hr>
                {{-- {{ $id = Auth::id() }} --}}
                <form class="form-horizontal" method="POST" action="{{ route('user.update', $id= Auth::id()) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-3">
                        <div class="text-center">
                            {{-- {{ dd(Auth::user()->user_image) }} --}}
                            <img src=" {{ asset('storage/image/'.Auth::user()->user_image) }} " class="card-img-top" alt="あなたの画像" style="object-fit: cover; height: 200px; width: 200px;">
                            {{-- <img src="//placehold.it/100" class="avatar img-circle" alt="avatar"> --}}
                            
                            <h6>Upload a different photo...</h6>

                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="user_image">
                        </div>
                    </div>
                    
                    <!-- edit form column -->
                    <div class="col-md-9 personal-info">
                        <a class="btn btn-primary" href="{{route('toilet.index')}}" role="button">あとで登録する</a>
                        <div class="alert alert-info alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a> 
                            <i class="fa fa-coffee"></i>
                            <strong>Toileatter</strong>へようこそ。mypage編集はこちら。
                        </div>
                        <h3>Personal info</h3>
                        
                            <div class="form-group">
                            <label class="col-lg-3 control-label">Name:</label>
                                <div class="col-lg-8">
                                    <input name="name" class="form-control" type="text" value="{{ Auth::user()->name }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">よく使う路線:</label>
                                <div class="col-lg-8">
                                    <div class="ui-select">
                                        <select id="often_route" class="form-control" name="often_route">
                                            <option selected="">{{Auth::user()->often_route}}</option>
                                                @foreach ($routes as $route)
                                                    @if (Auth::user()->often_route != $route->name)
                                                        <option value="1">{{$route->name}}</option>
                                                    @endif
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">よく使う駅:</label>
                                <div class="col-lg-8">
                                    <div class="ui-select">
                                        <select id="often_station" class="form-control" name="often_station">
                                            <option selected="">{{Auth::user()->often_station}}</option>
                                            @foreach ($stations as $station)
                                                @if (Auth::user()->often_station != $station->name)
                                                    <option value="1">{{$station->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Gender:</label>
                                <div class="col-md-6" style="padding-top: 8px">
                                    @if (Auth::user()->gender == "Male")
                                        <input id="male" type="radio" name="gender" value="male" checked="checked">
                                        <label for="male">Male</label>
                                        <input id="female" type="radio" name="gender" value="female">
                                        <label for="female">Female</label>
                                    @elseif (Auth::user()->gender == "Female")
                                        <input id="male" type="radio" name="gender" value="male">
                                        <label for="male">Male</label>
                                        <input id="female" type="radio" name="gender" value="female" checked="checked">
                                        <label for="female">Female</label>
                                    @else
                                        <input id="male" type="radio" name="gender" value="male">
                                        <label for="male">Male</label>
                                        <input id="female" type="radio" name="gender" value="female">
                                        <label for="female">Female</label>
                                    @endif
                                    @if ($errors->has('gender'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-primary" value="Save Changes">
                                    <span></span>
                                    <input type="reset" class="btn btn-default" value="Cancel">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">あなたのCheckIn</h2>        
            <hr class="mt-2 mb-5"> 
            <div class="row text-center text-lg-left">
                @foreach($posts as $post)
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                            <img src=" {{ asset('storage/image/'.$post->toilet_image_name) }} " class="card-img-top" alt="トイレの画像" style="object-fit: cover; height: 200px; width: 200px;"> 
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->toilet->toilet_name }}</h5>
                                <p class="card-text">個室の数：{{ $post->closet_bowl_number }}</p>
                                <p class="card-text">綺麗でしたか：{{ $post->beautifulness }}</p>
                                <p class="card-text">すぐ入れましたか：{{ $post->quickly_enter }}</p>
                                <p class="card-text">ホームからの距離：{{ $post->distance }}</p>
                                <a href="{{ route('toilet.show', $post->toilet->id ) }}" class="btn btn-primary">詳細</a>
                                {!! delete_form(['posts', $post->id]) !!}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endsection
    </div>

