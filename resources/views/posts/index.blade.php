@extends('layouts.app')


@section('nav-link')
<a href="/posts/create">Create a new Blog post</a>
@endsection

@section('content')



<div class="container">
  @foreach ($posts as $post)
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4><strong>{{ $post->title }}</strong><small class="float-right"> By {{$post->author}}</small><h4></div>

                <div class="card-body">

                    <p>{{$post->content}}</p>

                  <a href="/posts/{{ $post->id }}/edit">Edit</a>
                  <p>Last updated on <small>{{$post-> fixTimeStamp()}}</small></p>
                  </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
