<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SmileComment;

class Smiles_commentController extends Controller
{
    public function index() {
        return Smile::all();
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return Smile::findOrFail($id);

    }
}