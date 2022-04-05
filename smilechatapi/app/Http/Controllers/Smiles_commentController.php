<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Smiles_comment;

class Smiles_commentController extends Controller
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
        return view('smiles-comments', [
            'smiles-comments' => SmileComment::findOrFail($id)
        ]);
    }
}
