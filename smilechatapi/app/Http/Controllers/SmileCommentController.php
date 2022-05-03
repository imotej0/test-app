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
        $request->validate([
        'user_id' => 'required|integer',
        'comment_id' => 'required|integer',
        'smile' => 'required',
        ]);
        $SmileComment= new SmileComment;
        $SmileComment->user_id=$request->user_id;
        $SmileComment->comment_id=$request->comment_id;
        $SmileComment->smile=$request->smile;
        $SmileComment=$SmileComment->save();
        return $SmileComment;
    }
    public function update(Request $request, $id)
    {
        $SmileComment=SmileComment::find($id);
        $SmileComment->user_id=$request->user_id;
        $SmileComment->comment_id=$request->comment_id;
        $SmileComment->smile=$request->smile;
        $SmileComment=$SmileComment->save();
        return $SmileComment;
    }
    public function destroy(Request $request, $id)
    {
        $SmileComment = SmileComment::where('id', '=', $id)->first();
        $SmileComment->delete();
    }
}