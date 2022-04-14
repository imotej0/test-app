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
      $this->validate($request, [
      'user_id' => 'required|integer|digits:5',
      'post_id' => 'required|integer|digits:5',
      'comment' => 'required',
      ]);
    }
    public function update(Request $request, $id)
    {
        $Comment = Comment::where('id', '=', $id)->first();
        $Comment->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $Comment = Comment::where('id', '=', $id)->first();
        $Comment->delete();
    }
    function getData(Request $request)
        {
            $request->validate([
            'comment'=>'required',
        ]);
            return $request->input();
        }
}
