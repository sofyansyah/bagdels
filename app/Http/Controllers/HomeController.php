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


}
