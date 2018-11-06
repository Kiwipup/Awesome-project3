<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet" type="text/css">

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
            .jumbotron {
                /* The image used */
                background-image: url("https://static.gamespot.com/uploads/scale_super/348/3488957/2674855-mxwmpvi.jpg");

                /* Full height */
                height: 500px;
                /*height: 347px;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;*/


                /* Create the parallax scrolling effect */
               background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;

            }
        </style>
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid"><div class="content">
            <div class="title m-b-md">
                Ghibli Blog
            </div>

            <div class="links">

            </div>
          </div>
        </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div id="nav" class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Dashboard</div>

                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            </div>


        <script src="/js/app.js"></script>
    </body>
</html>
