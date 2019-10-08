@extends('layouts.app')

    <div class="container">
        @section('content')


        <div class="container">
                <h2>プロフィール編集</h2>
                    <hr>
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-3">
                        <div class="text-center">
                            <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                            <h6>Upload a different photo...</h6>

                            <input type="file" class="form-control">
                        </div>
                    </div>
                    
                    <!-- edit form column -->
                    <div class="col-md-9 personal-info">
                        <div class="alert alert-info alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a> 
                            <i class="fa fa-coffee"></i>
                            This is an <strong>.alert</strong>. Use this to show important messages to the user.
                        </div>
                        <h3>Personal info</h3>
                        
                        <form class="form-horizontal" role="form">

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Name:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Email:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">よく使う路線:</label>
                                <div class="col-lg-8">
                                    <div class="ui-select">
                                        <select id="often_route" class="form-control" name="often_route">
                                            <option selected="">選択する</option>
                                            @foreach ($stations as $station)
                                            <option value="1">{{$station->name}}</option>
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
                                            <option selected="">選択する</option>
                                            @foreach ($stations as $station)
                                            <option value="1">{{$station->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Gender:</label>
                                <div class="col-md-6" style="padding-top: 8px">
                                    <input id="male" type="radio" name="gender" value="male">
                                    <label for="male">Male</label>
                                    <input id="female" type="radio" name="gender" value="female">
                                    <label for="female">Female</label>
                                    @if ($errors->has('gender'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Password:</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="password" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Confirm password:</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="password" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-8">
                                    <input type="button" class="btn btn-primary" value="Save Changes">
                                    <span></span>
                                <input type="reset" class="btn btn-default" value="Cancel">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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

