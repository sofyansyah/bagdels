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
Route::get('/team', function () {
	return view('team.details');
});
Route::post('post-login', 'UserController@postlogin');

Auth::routes();

// Route::get('/', 'HomeController@index')-''>name('home');
///////////////////////// USER /////////////////////////////////////

Route::get('/profile/{id}', 'UserController@profile');
Route::get('/{id}/profile-edit', 'UserController@edit_profile');
Route::post('profile/{id}/edit', 'UserController@edit_profile_post');

///////////////////////// FOLLOW /////////////////////////////////////

Route::post('post-comment', 'CommentIdeasController@post_comment');
Route::get('follow/{name}', 'IdeasController@follow');
Route::get('unfollow/{name}', 'IdeasController@unfollow');

///////////////////////// IDEA /////////////////////////////////////

Route::get('/detail', 'IdeasController@detail');
Route::get('/discover', 'IdeasController@index');
Route::get('/upload', 'IdeasController@upload');
Route::post('post-idea', 'IdeasController@post_idea');
Route::get('idea/{id}', 'IdeasController@details_idea');
Route::post('idea/{id}/post-team', 'IdeasController@post_to_team');


///////////////////////// TEAM /////////////////////////////////////

Route::get('/list-team', 'TeamsController@index');
Route::get('/team/{id}', 'TeamsController@details');
Route::get('/team/{id}/edit', 'TeamsController@edit_team');
Route::post('team/{id}/edit', 'TeamsController@edit_team_post');