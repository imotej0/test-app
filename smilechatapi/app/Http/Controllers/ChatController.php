<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class ChatController extends Controller
{
    public function index() {
        return Chat::all();
    }
    public function show(Chat $Chat) {
        return $Chat;
    }
    public function store(Request $request)
    {
      $request->validate([
      'user_id' => 'required|integer',
      'friend_id' => 'required|integer',
      'message' => 'required|max:255',
      ]);
        $Chat= new Chat;
        $Chat->user_id=$request->user_id;
        $Chat->friend_id=$request->friend_id;
        $Chat->message=$request->message;
        $Chat=$Chat->save();
    }
    public function update(Request $request, $id)
    {
        $Chat = Chat::where('id', '=', $id)->first();
        $Chat->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $Chat = Chat::where('id', '=', $id)->first();
        $Chat->delete();
    }
}


