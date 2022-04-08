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
}
