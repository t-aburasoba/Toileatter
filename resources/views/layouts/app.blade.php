<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Toileatter</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <style>
            /* Always set the map height explicitly to define the size of the div
           * element that contains the map. */
            #map {
            height: 100%;
            }
          /* Optional: Makes the sample page fill the window. */
            html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            }
    </style>
    </head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="position: sticky; top: 0; z-index: 2; height: 68px;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/toilet') }}" style="font-size: 24px; color: #2A293E;">
                    <img src="https://res.cloudinary.com/dlalfv68e/image/upload/v1571821513/v0rxug3uydzfhk7boqqx.png" alt="" style="width: 155px; margin-top: 14px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-md" style="z-index:1100;">
            
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

                <div class="container search p-0">
                    <div class="row">
                        <div class="col-12 p-0">
                            <form class="card search card-sm mb-0" action="{{route('posts.search')}}" method="POST">
                            {{csrf_field()}}
                                <div class="card-body search row no-gutters align-items-center p-0">
                                    <div class="col">
                                        <input class="form-control form-control-sm form-control-borderless" name="search" placeholder="駅名から検索">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="cp_btn search_btn" style="width: 70px; margin-right: 40px;" type="submit">Search</button>
                                    </div><!--end of col-->
                                </div>
                            </form>
                        </div><!--end of col-->
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
                                    <a type="button" class="dropdown-item" data-toggle="modal" data-target="#myModal" style="-webkit-appearance: none;">How to use</a>
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

                @yield('content')
                <!-- Footer -->
                <footer class="page-footer font-small blue">
                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3">
                        <a class="cpright">© 2019 Copyright: Toileatter</a>
                    </div>
                        <!-- Copyright -->
                </footer>
                    <!-- Footer -->
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API_KEY') }}&callback=initMap"async defer></script>

    

</body>
</html>