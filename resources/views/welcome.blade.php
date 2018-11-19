<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
    <body class="pretty">

      <div id="nav" class="shrink flex-center full-height">
          @if (Route::has('login'))
              <div  class="top-right links">
                  @auth
                      <a href="{{ url('posts') }}">My Dashboard</a>
                  @else
                      <a href="{{ route('login') }}">Login</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}">Register</a>
                      @endif
                  @endauth
              </div>
          @endif
        </div>



        <div id="app">



            <div class="container text-center">


              <div class="title">
                  Ghibli Blog
              </div>
            

              <div class="page">
              @foreach ($blogposts as $post)
                <div class="row justify-content-center text-left mb-4">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header"><h4><strong>{{ $post->title }}

                            </div>

                            <div class="card-body">

                                <p>{{$post->content}}</p>

                              </div>
                              <div class="card-footer bg-transparent">
                              <span><h5><small class="float-right"> By {{$post->author}}</small><h5></span>
                                <span><h6 class="float-right mr-2">Last updated <small>{{$post-> updated_at}}</small></h6></span>
                                <a class="float-left text-secondary" href="/posts/{{$post->id}}/comments">Comments</a>
                              </div>
                        </div>
                    </div>
                </div>
                @endforeach
              </div>
            </div>





      </div>










    </body>
</html>
