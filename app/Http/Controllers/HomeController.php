<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ideas;
use App\User;
use App\CommentIdeas;
use Image;
use App\Follow;
use App\Team;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function home(){

        $ideas = Ideas::join('users', 'ideas.user_id', '=', 'users.id')
        ->select('ideas.*','users.name as user_name', 'users.photo as user_avatar')
        ->orderBy('id', 'desc')
        ->get();

         $teams = Team::join('ideas', 'teams.ideas_id', '=', 'ideas.id')
        ->get();

        return view ('index', compact ('ideas', 'teams'));
    }
}
