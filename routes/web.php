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

Auth::routes();

Route::get('/posts', 'HomeController@index')->name('posts');

Route::resource('posts', 'BlogpostController')->middleware('auth');

//Route::resource('/', 'WelcomeController');
