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
use App\JoinMember;

class JoinController extends Controller
{
  public function join($id)
  {
    $join = new JoinMember;
    $join->id_idea  = $id;
    $join->id_user  = Auth::user()->id;
    $join->status   = '2'; // STATUS JOIN PENDING
    $join->save();

    return redirect()->back();
  }
}
