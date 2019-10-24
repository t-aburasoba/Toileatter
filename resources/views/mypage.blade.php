@extends('layouts.app')

    <div class="container" style="background-image : url(storage/img/)">
        @section('content')
        <div class="user_id">
        </div>
        <div class="container mypagebg">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="mt-3">プロフィール編集</h2>
                </div>
                <div class="col-md-6">
                        @isset(Auth::user()->gender)
                        <div class="col-md-6">
                            <a class="cp_btn mt-2" href="{{route('toilet.index')}}" role="button">Toileatterを始める</a>
                        </div>
                        @endisset
                </div>
            </div>
                <hr>
                {{-- {{ $id = Auth::id() }} --}}
                <form class="form-horizontal" method="POST" action="{{ route('user.update', $id= Auth::id()) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-3">
                        <div class="text-center">

                                @if(Auth::user()->avatar != null)
                                    <img class="img-thumbnail" src="{{ Auth::user()->avatar }}" width="200px" height="200px">
                                    <h6>こんにちは{{ Auth::user()->name }}さん<br>Twitterログインありがとう!</h6>
                                @else
                                    <img src=" {{ Auth::user()->user_image }} " class="card-img-top, img-thumbnail" alt="{{ Auth::user()->name }}の画像" style="object-fit: cover; height: 200px; width: 200px;">
                                    <h6>Upload a different photo...</h6>
        
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="user_image">
                                @endif
                                
                        </div>
                    </div>
                    
                    <!-- edit form column -->
                    <div class="col-md-7 personal-info">
                        {{-- <div class="alert alert-danger alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert-success">×</a> 
                            <i class="fa fa-toilet"></i>
                            <strong>名前、性別、路線、駅</strong>を設定しましょう。画像はなしでもOK

                        </div> --}}
                        <h3>Personal info</h3>
                        
                            <div class="form-group">
                            <label class="col-md-3 control-label">Name:</label>
                                <div class="col-md-12">
                                    <input name="name" class="form-control" type="text" value="{{ Auth::user()->name }}">
                                </div>
                            </div>


                            <div class="form-group">
                                    <label class="col-md-3 control-label">Gender:</label>
                                    <div class="col-md-12" style="padding-top: 8px">
                                        @if (Auth::user()->gender == "Male")
                                            <input id="male" type="radio" name="gender" value="Male" checked="checked" required="required">Male
                                            {{-- <label for="male">Male</label> --}}
                                            <input id="female" type="radio" name="gender" value="Female" required="required">Female
                                            {{-- <label for="female">Female</label> --}}
                                        @elseif (Auth::user()->gender == "Female")
                                            <input id="male" type="radio" name="gender" value="Male" required="required">Male
                                            {{-- <label for="male">Male</label> --}}
                                            <input id="female" type="radio" name="gender" value="Female" checked="checked" required="required">Female
                                            {{-- <label for="female">Female</label> --}}
                                        @else
                                            <input id="male" type="radio" name="gender" value="Male" required="required">Male
                                            {{-- <label for="male">Male</label> --}}
                                            <input id="female" type="radio" name="gender" value="Female" required="required">Female
                                            {{-- <label for="female">Female</label> --}}
                                        @endif
                                        @if ($errors->has('gender'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            <div class="form-group">
                                    <label class="col-md-3 control-label">よく使う路線:</label>
                                    <div class="col-md-12">
                                        <div class="ui-select">
                                            <select id="route_id" class="form-control" name="route_id">
                                                @isset(Auth::user()->route_id)
                                                <option selected="" value="{{Auth::user()->route_id}}">{{Auth::user()->route->name}}</option>
                                                @foreach ($routes as $route)
                                                    @if (Auth::user()->route->name != $route->name)
                                                        <option value="{{$route->id}}">{{$route->name}}</option>
                                                    @endif
                                                @endforeach
                                                @else
                                                @foreach ($routes as $route)
                                                        <option value="{{$route->id}}">{{$route->name}}</option>
                                                @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">よく使う駅:</label>
                                <div class="col-md-12">
                                    <div class="ui-select">
                                        <select id="station_id" class="form-control" name="station_id">
                                                @isset(Auth::user()->station_id)
                                                <option selected="" value="{{Auth::user()->station_id}}">{{Auth::user()->station->name}}</option>
                                                @foreach ($stations as $station)
                                                    @if (Auth::user()->station->name != $station->name)
                                                        <option value="{{$station->id}}">{{$station->name}}</option>
                                                    @endif
                                                @endforeach
                                                @else
                                                @foreach ($stations as $station)
                                                        <option value="{{$station->id}}">{{$station->name}}</option>
                                                @endforeach
                                                @endisset
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <div class="form-group row">
                                {{-- <label class="col-md-8 control-label"></label> --}}
                                <div class="col-md-6">
                                    <button type="submit" class="cp_btn mt-2" href="{{route('toilet.index')}}">Save Changes</button>
                                </div>

                            </div>
                        </form>
                </div>
            </div>
            <h2 class="font-weight-light text-center text-lg-left mt-5 mb-0">あなたのCheckIn</h2>        
            <hr class="mt-2 mb-5"> 
            <div class="row text-center text-lg-left">
                @if(count(Auth::user()->post) == 0)
                <p>まだ投稿はありません。投稿して、腹痛民を救おう。</p>
                @endif
                @foreach($posts as $post)
                    <div class="col-md-3">
                        {{-- <a href="#" class="d-block mb-4"> --}}
                            <div class="card-body checkin">
                                <h5 class="card-title">{{ $post->toilet->toilet_name }}</h5>
                                <img src=" {{ $post->toilet_image_name }} " class="card-img-top" alt="トイレの画像の登録なし" style="object-fit: cover; height: 200px;"> 
                                <p class="card-text">個室の数：{{ $post->closet_bowl_number }}</p>
                                <p class="card-text">綺麗でしたか：{{ $post->beautifulness }}</p>
                                <p class="card-text">すぐ入れた？：{{ $post->quickly_enter }}</p>
                                <p class="card-text">ホームからの距離：{{ $post->distance }}</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('toilet.show', $post->toilet->id ) }}" class="cp_btn mypage_btn">詳細</a>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        {!! delete_form(['posts', $post->id]) !!}
                                    </div>
                                </div>
                            </div>
                        {{-- </a> --}}
                    </div>
                @endforeach
            </div>
        @endsection
    </div>
    </div>

