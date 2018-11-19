<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $blogposts = DB::table('blogposts')->orderBy('updated_at', 'desc')->get();
  return view('welcome', compact('blogposts'));
});

Route::get('/posts/comments', function () {
  $comments = DB::table('comments')->orderBy('updated_at', 'desc')->get();
  return view('/posts/{id}/comments', compact('comments'));
});


Auth::routes();

Route::get('home', 'HomeController@index')->name('home');


Route::resource('posts', 'BlogpostController')->middleware('auth');
Route::resource('/comments', 'CommentsController')->middleware('auth');


//Route::resource('/', 'WelcomeController');
