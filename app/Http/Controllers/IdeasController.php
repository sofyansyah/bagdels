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

class IdeasController extends Controller
{
	public function detail(){

		return view ('ideas.details');
	}

	public function index(){
		$ideas = Ideas::join('users', 'ideas.user_id', '=', 'users.id')
		->select('ideas.*','users.name as user_name', 'users.photo as user_avatar')
		->orderBy('id', 'desc')
		->get();
		return view ('ideas.discover', compact ('ideas'));
	}

	public function upload(){

		return view ('ideas.upload');
	}

	public function post_idea (Request $r){

		$idea = new Ideas;
		$idea->user_id = Auth::user()->id;
		$idea->title = $r->title;
		$idea->description= $r->description;
		$idea->tags = $r->tags;
		$idea->save();

		if($r->hasFile('image')){

			$post = $r->file('image');
			$filename = $r->idea.'_'.str_random(4) . '.'.pathinfo($r->file('image')->getClientOriginalName(),PATHINFO_EXTENSION);
			Image::make($post)->save (public_path('img/' . $filename));
			$idea->image_normal = $filename;

			$post2 = $r->file('image');
			$filename = $r->idea.'_'.str_random(4) . '.'.pathinfo($r->file('image')->getClientOriginalName(),PATHINFO_EXTENSION);
			Image::make($post2)->crop(400, 300)->save (public_path('img/' . $filename));
			$idea->image_small = $filename;
			$idea->save();
		}

		return redirect('/upload')->with('success','Berhasil buat ide');
	}

	public function details_idea ($id){

		$idea = Ideas::where('ideas.id', $id)
		->join('users', 'ideas.user_id', '=', 'users.id')
		->select('ideas.*','users.name as user_name', 'users.photo as user_avatar', 'users.id as user_id')
		->first();

		$comment = CommentIdeas::where('ideas.id',$id)
		->join('ideas','comment_ideas.ideas_id','=','ideas.id')
		->join('users','comment_ideas.user_id','=','users.id')
		->where('comment_ideas.status','1')
		->select('comment_ideas.id as comments_id','comment_ideas.user_id as user_comment','comment_ideas.reply','ideas.id as ideas_id', 'comment_ideas.created_at as date', 'users.name', 'users.photo as user_avatar')
		->get();



		return view('ideas.details', compact('idea','comment'));


	}

	public function follow($id)
	{
		$user = User::where('users.id', $id)->first();
		$follow = new Follow;
		$follow->user_id        = Auth::user()->id;
		$follow->ideas_follow  = $user->id;
		$follow->save();

		return redirect()->back()->with('success','Berhasil Follow '.$id);
	}
	public function unfollow($id)
	{
		$follow = Follow::findOrFail($id);
		$follow->delete();

		return redirect()->back()->with('success','Berhasil UnFollow ');
	}

	public function post_to_team (Request $r)
	{

		$team = new Team;
		// $team->user_id = Auth::user()->id;
		$team->ideas_id = $r->id;
		$team->save();

		return redirect()->back()->with('success','Berhasil UnFollow ');
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

