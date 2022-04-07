<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SmileComment;

class SmileCommentController extends Controller
{
    public function index() {
        return SmileComment::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return SmileComment::findOrFail($id);

    }
}