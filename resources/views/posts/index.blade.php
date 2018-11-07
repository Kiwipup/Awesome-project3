@extends('layouts.app')


@section('nav-link')
<a class="nav-link" href="/posts/create">Create a new Blog post</a>
@endsection

@section('content')




  @foreach ($posts as $post)
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4><strong>{{ $post->title }}<h4>
                  </div>

                <div class="card-body">

                    <p>{{$post->content}}</p>

                  <div class="card-footer bg-transparent">
                  <span><h5><small class="float-right"> By {{$post->author}}</small><h5></span>
                    <span><h6 class="float-right mr-2">Last updated <small>{{$post-> fixTimeStamp()}}</small></h6></span>
                    <small><a class="float-left" href="/posts/{{ $post->id }}/edit">Edit</a></small>
                  </div>
                  </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection
