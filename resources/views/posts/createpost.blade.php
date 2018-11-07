@extends('layouts.postwrapper')

@section('nav-link')
<a class="nav-link" href="/posts">Dashboard</a>
@endsection

@section('postheader')
    Create a new blog post!
@endsection

@section('postcontent')

<form class="" method="post" action="/posts">
    @csrf
    <div class="form-group">
        <label for="postsubject">Blog Post Title</label>
        <input class="form-control mb-3" type="text" id="postsubject" name="postsubject" placeholder="What is your post about?">
        <input class="form-control" type="text" id="postcontent" name="postcontent" placeholder="Write your post content here.">

    </div>
    <button type="submit" class="btn btn-primary">Add post</button>
</form>

@endsection
