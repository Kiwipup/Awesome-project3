@extends('layouts.postwrapper')

@section('nav-link')
<a class="nav-link" href="/posts">Dashboard</a>
@endsection

@section('postheader')
    Reply with a comment!
@endsection

@section('postcontent')

<form class="" method="post" action="">
    @csrf
    <div class="form-group">
        <input class="form-control mb-3" type="text" id="comment" name="comment" placeholder="What do you want to say?">

    </div>
    <button type="submit" class="btn">Add Comment</button>
</form>

@endsection

@foreach ($comments as $comment)
  <div class="row justify-content-center mb-4">
      <div class="col-md-8">
          <div class="card">


              <div class="card-body">

                  <p>{{$comment->comment_content}}</p>

                <div class="card-footer bg-transparent">
                <span><h5><small class="float-right"> By {{$comment->author}}</small><h5></span>
                  <span><h6 class="float-right mr-2">Last updated <small>{{$comment-> fixTimeStamp()}}</small></h6></span>
                </div>
                </div>
          </div>
      </div>
  </div>
  @endforeach
