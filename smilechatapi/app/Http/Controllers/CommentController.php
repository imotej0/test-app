<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index() {
        return Comment::all();
    }
    public function show(Comment $Comment) {
        return $Comment;
    }
    public function store(Request $request)
    {
        $request->validate([
      'user_id' => 'required|integer',
      'post_id' => 'required|integer',
      'comment' => 'required',
      ]);
        $Comment= new Comment;
        $Comment->user_id=$request->user_id;
        $Comment->post_id=$request->post_id;
        $Comment->comment=$request->comment;
        $Comment=$Comment->save();
    }
    public function update(Request $request, $id)
    {
        $Comment=Comment::find($request->id);
        $Comment->user_id=$request->user_id;
        $Comment->post_id=$request->post_id;
        $Comment->comment=$request->comment;
        $Comment=$Comment->save();
    }
    public function destroy(Request $request, $id)
    {
        $Comment = Comment::where('id', '=', $id)->first();
        $Comment->delete();
    }
}
