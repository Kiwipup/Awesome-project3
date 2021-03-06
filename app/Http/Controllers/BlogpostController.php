<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = \Auth::user()->posts()->orderBy('updated_at', 'desc')->get();
      return view('posts.index', compact('posts'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.createpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $blogposts = new \App\Blogpost;
      $blogposts->title = $request->input('postsubject');
      $blogposts->content = $request->input('postcontent');
      $blogposts->author = $request->username;


      $blogposts->user_id = \Auth::id();
      $blogposts->author = \Auth::user()->username;

      $blogposts->save();

      $request->session()->flash('status', "A new blog post called <strong>{$blogposts->title}</strong> was added!");
      return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = \App\Blogpost::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $blogposts = \App\Blogpost::find($id);
      $blogposts->title = $request->input('postsubject');
      $blogposts->content = $request->input('postcontent');
      $blogposts->author = $request->username;


      $blogposts->user_id = \Auth::id();
      $blogposts->author = \Auth::user()->username;

      $blogposts->save();

      $request->session()->flash('status', "You have edited the post successfully!");
      return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
