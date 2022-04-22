<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        return Post::all();
    }
    public function show(Post $Post) {
        return $Post;
    }
    public function store(Request $request)
    {
        $request->validate([
      'user_id' => 'required|integer',
      'post' => 'required|integer',
      'caption' => 'required',
      ]);
        $Post= new Post;
        $Post->user_id=$request->user_id;
        $Post->post=$request->post;
        $Post->caption=$request->caption;
        $Post=$Post->save();
    }
    public function update(Request $request, $id)
    {
        $Post=Post::find($id);
        $Post->user_id=$request->user_id;
        $Post->post=$request->post;
        $Post->caption=$request->caption;
        $Post=$Post->save();
    }
    public function destroy(Request $request, $id)
    {
        $Post = Post::where('id', '=', $id)->first();
        $Post->delete();
    }
}
