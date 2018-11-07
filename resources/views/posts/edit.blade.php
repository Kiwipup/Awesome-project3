@extends('layouts.postwrapper')


@section('nav-link')
<a class="nav-link" href="/posts">Dashboard</a>
@endsection

@section('postheader')
    Edit your blogpost
@endsection



@section('postcontent')

<form class="" method="post" action="/posts/{{$post->id}}">
  @method('PUT')
    @csrf
    <div class="form-group">
        <label for="postsubject">Blog Post Title</label>
        <input class="form-control mb-3" type="text" id="postsubject" name="postsubject" value="{{ $post->title }}">
        <input class="form-control" type="text" id="postcontent" name="postcontent" value="{{$post->content}}">

    </div>
    <button type="submit" class="btn btn-primary">Edit post</button>
</form>

@endsection
