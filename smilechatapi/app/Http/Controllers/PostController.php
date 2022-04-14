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
      $this->validate($request, [
      'user_id' => 'required|integer|digits:5',
      'post' => 'required|integer|digits:5',
      'caption' => 'required',
      ]);
    }
    public function update(Request $request, $id)
    {
        $Post = Post::where('id', '=', $id)->first();
        $Post->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $Post = Post::where('id', '=', $id)->first();
        $Post->delete();
    }
    function getData(Request $request)
        {
            $request->validate([
            'post'=>'required',
        ]);
            return $request->input();
        }
}
