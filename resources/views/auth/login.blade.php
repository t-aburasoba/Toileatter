@extends('layouts.appwithout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="opacity: 0.9; border: none;">
                <div class="card-header" style="background-color: #2A293E; opacity: 0.6;">
                    <div class="text-center" style="color: white; font-size: 14px;">
                        {{ __('Login') }}
                    </div>
                </div>

                <div class="card-body" style="margin-top: 16px;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-right mb-2">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label mb-4" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                                <div class="col-md-4 col-sm-6 mt-2">
                                    <button type="submit" class="cp_btn mb-3">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="col-md-4 col-sm-6 mt-2">
                                    <a href="{{ route('twitter.login')}}" class="cp_btn">twitterログイン</a>
                                </div>
                                <div class="col-md-4 col-sm-6 mt-2">
                                    <a href="{{ route('line.login')}}" class="cp_btn">Lineログイン</a>
                                </div>

                                <div class="col-md-4 col-sm-6 mt-2">
                                    <a href="{{route('toilet.index')}}" class="cp_btn">あとで登録する</a>
                                </div>
                                <div class="col-md-4 col-md-offset-4  col-sm-6 mt-2">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection