<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ideas;
use App\User;
use App\CommentIdeas;
use Image;
use App\Follow;
use App\Team;
use Auth;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::join('ideas', 'teams.ideas_id', '=', 'ideas.id')
        ->get();

        return view ('team.index', compact('teams'));
    }

    public function details($id)
    {
    	$team = Team::where('ideas.id', $id)
        ->join('ideas', 'teams.ideas_id', '=', 'ideas.id')
        ->first();
        return view ('team.details', compact('team'));
    }

    public function edit_team($id)
    {
        $teams = Team::where('teams.ideas_id', $id)->first();

        return view ('team.edit', compact('teams'));
    }

    public function edit_team_post(Request $r, $id)
    {
     $teams = Team::findOrFail($id);
     $teams->member = $r->member;
     $teams->save();

     if($r->hasFile('logo')){

        $gambar = $r->file('logo');
        $filename = $r->name.'_'.str_random(4) . '.'.pathinfo($r->file('logo')->getClientOriginalName(),PATHINFO_EXTENSION);
        Image::make($gambar)->resize(150, 150)->save (public_path('/img/logo/' . $filename));
        $teams->logo = $filename;
        $teams->save();
    }


    return redirect('/')->with('success','Berhasil edit profile anda');
}
}
