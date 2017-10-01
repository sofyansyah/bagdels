<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ideas;
use App\Team;
use App\Member;
use Image;

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
        $team = Team::join('ideas', 'teams.ideas_id', '=', 'ideas.id')
        ->first();
        return view ('team.edit', compact('team'));
    }
}
