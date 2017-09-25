<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommentIdeas;
use App\Ideas;
use App\User;
use Auth;

class CommentIdeasController extends Controller

{
    public function post_comment(Request $r)
    {
       
       $comment = new CommentIdeas;
       $comment->user_id = Auth::user()->id;
       $comment->ideas_id= $r->ideas_id;
       $comment->reply= $r->reply;
       $comment->status= $r->status; 
       $comment->ideas_id= $r->id;
       $comment->save();

       return redirect()->back()->with('success','Comment anda berhasil');
   }

    public function hapus_comment($id)
    {
       $comment = CommentIdeas::join('users', 'comment_ideas.user_id', '=', 'users.id')
       ->where('comment_ideas.id', $id)
       ->select('comment_ideas.*','users.name')
       ->first();
       $comment->delete();
       return redirect()->back()->with('success','Comment anda berhasil di delete');
   }

}
