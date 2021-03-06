<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MusicLibrary</title>

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/albums') }}"><i class="fas fa-record-vinyl fa-2x"></i></a>
                        <a href="{{ url('/profile/').'/'.Auth::user()->id }}"><i class="fas fa-user fa-2x"></i></a>
                        <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off fa-2x"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    @else
                        <a href="{{ url('/albums') }}"><i class="fas fa-record-vinyl fa-2x"></i></a>
                        <a href="{{ route('login') }}"><i class="fas fa-user fa-2x"></i></a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><i class="fas fa-sign-in-alt fa-2x"></i></a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Welcome to {{ config('app.name', 'Laravel') }}
                </div>

                <div class="links">
                    <a href="https://www.offerzen.com/candidate/nkidi-nkogatse">Offerzen</a>
                    <a href="https://github.com/JohnDevSA/musiclibrary">GitHub repo</a>
                </div>
            </div>
        </div>
    </body>
</html>
