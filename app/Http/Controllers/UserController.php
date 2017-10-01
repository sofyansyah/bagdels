<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Hash;
use Image;
use App\Follow;
use App\Ideas;
use App\Team;

class UserController extends Controller
{
  public function login()
  {
    if (Auth::check()) {
      return redirect('/');
    }
    return view('auth.login');
  }
  public function postlogin(Request $r)
  {
    $this->validate($r, [
      'email'     => 'required',
      'password'  => 'required'
      ]);

    if (Auth::attempt(['email' => $r->email, 'password' => $r->password])) {
      return redirect()->intended('/');
    }

    return redirect()->back()->with('error','email dan password yang anda masukan tidak sesuai');
  }
  public function logout()
  {
    Auth::logout();
    return redirect('/');
  }

  public function edit_profile($name)
  {
    $user = User::whereName($name)
    ->first();
    return view('user.profile-edit',compact('user'));
  }
  public function edit_profile_post(Request $r, $id)
  {
   $user = User::findOrFail($id);
   $user->bio = $r->bio;
   $user->job = $r->job;
   $user->facebook = $r->facebook;
   $user->twitter = $r->twitter;
   $user->instagram = $r->instagram;
   $user->save();

   if($r->hasFile('photo')){

     $avatar = $r->file('photo');
     $filename = $r->name.'_'.str_random(4) . '.'.pathinfo($r->file('photo')->getClientOriginalName(),PATHINFO_EXTENSION);
     Image::make($avatar)->resize(150, 150)->save (public_path('/img/avatar/' . $filename));

     $user = Auth::user();
     $user->photo = $filename;
     $user->save();
   }


   return redirect('profile/'. $user->name)->with('success','Berhasil edit profile anda');
 }


 public function profile($name){

   $user = User::whereName($name)->first();
   $follow = Follow::where('user_id',Auth::user()->id)->where('ideas_follow',$user->id)->first();
   $ideas = Ideas::where('ideas.user_id', $user->id)
   ->get();
   $teams = Team::where('teams.ideas_id', $user->id)
   ->get();
   return view ('user.profile', compact('user', 'ideas', 'follow', 'teams'));
 }

}
