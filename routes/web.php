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
	return view('index');
});
Route::post('post-login', 'UserController@postlogin');

Auth::routes();

// Route::get('/', 'HomeController@index')-''>name('home');
Route::get('/profile/{id}', 'UserController@profile');
Route::get('/{id}/profile-edit', 'UserController@edit_profile');
Route::post('profile/{id}/edit', 'UserController@edit_profile_post');
Route::get('/detail', 'IdeasController@detail');
Route::get('/discover', 'IdeasController@index');
Route::get('/upload', 'IdeasController@upload');
Route::post('post-idea', 'IdeasController@post_idea');
Route::get('idea/{id}', 'IdeasController@details_idea');

Route::post('post-comment', 'CommentIdeasController@post_comment');
// Route::get('follow/{name}', 'IdeasController@follow');
// Route::get('unfollow/{name}', 'IdeasController@unfollow');