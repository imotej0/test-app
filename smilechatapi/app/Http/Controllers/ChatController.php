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
      $this->validate($request, [
      'user_id' => 'required|max:255',
      'friend_id' => 'required|max:255',
      'message' => 'required|max:255',
      ]);
    }
    public function update(Request $request, $id)
    {
        $Chat = Chat::where('id', '=', $id)->first();
        $Chat->update($request->all());
    }
}


