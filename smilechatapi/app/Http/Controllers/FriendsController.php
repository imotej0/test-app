<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friends;

class FriendsController extends Controller
{
    public function index() {
        return Friends::all();
    }
    public function show(Friends $Friends) {
        return $Friends;
    }
    public function store(Request $request)
    {
      $this->validate($request, [
      'user_id1' => 'required|integer|digits:5',
      'user_id2' => 'required|integer|digits:5',
      'smile' => 'required',
      ]);
    }
}
