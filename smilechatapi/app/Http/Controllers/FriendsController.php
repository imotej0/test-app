<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friends;

class FriendsController extends Controller
{
    public function index() {
        return Friends::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('friends', [
            'friends' => Friends::findOrFail($id)
        ]);
    }
}
