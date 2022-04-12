<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SmileComment;

class SmileCommentController extends Controller
{
    public function index() {
        return SmileComment::all();
    }
    public function show(SmileComment $SmileComment) {
        return $SmileComment;
    }
    public function store(Request $request)
    {
      $this->validate($request, [
      'user_id' => 'required|integer|digits:5',
      'comment_id' => 'required|integer|digits:5',
      'smile' => 'required',
      ]);
    }
    public function update(Request $request, $id)
    {
        $SmileComment = SmileComment::where('id', '=', $id)->first();
        $SmileComment->update($request->all());
    }
}