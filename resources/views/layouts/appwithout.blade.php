<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Toileatter</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" style="background: url('https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/connection_b38q.svg'); background-size: cover; background-color:rgba(255,255,255,0.8); background-blend-mode:lighten; background-position:0pt -60pt;">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="position: sticky; top: 0; z-index: 2; height: 68px; background-color: transparent;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/toilet') }}" style="font-size: 24px;">
                    <h3>Toileatter</h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-md" style="z-index:1100 !important;">
    
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="font-size: 20px;">How to use</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body p-5" style="height: 325px;">
                        <p><strong>登録なしのゲストユーザー</strong></p>
                        <p>検索画面からトイレを検索することができます。</p>
                        <hr class="my-5">
                        <p><strong>登録してくださった方</strong></p>
                        <p class="pb-4">上記に加えて、クチコミ投稿、トイレの地図、他のユーザーのクチコミを見ることができます。</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div> 
            </div>
        </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" style="color: #eee;" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #eee;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('mypage.index') }}">Mypage</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

<div class="bg">
    <div class="container py-4">
            <div class="container">
                <div class="row justify-content-center" style="color: #eee;">
                    <div class="col-md-8">
                        <h3 class="text-center" style="font-size: 20px;">あなたの投稿が腹痛民を救います。</h3>
                        <p class="text-center" style="font-size: 14px; margin-bottom: 3px;">Toileatterで駅構内のすぐ入れるトイレを検索することができます。</p>
                    </div>
                </div>
            </div>
        <div class="container py-4"> 
            @yield('content')

            <footer class="page-footer font-small blue mt-5 pt-5">
                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">
                    <a class="cpright">© 2019 Copyright: Toileatter</a>
                </div>
                    <!-- Copyright -->
            </footer>
                <!-- Footer -->
        </div>
    </div>
</div>
</body>
</html>
