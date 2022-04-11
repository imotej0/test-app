<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Smile;


class SmileController extends Controller
{
    public function index() {
        return Smile::all();
    }
    public function show(Smile $Smile) {
        return $Smile;
    }
    public function store(Request $request)
    {
      $this->validate($request, [
      'user_id' => 'required|integer|digits:5',
      'post_id' => 'required|integer|digits:5',
      'smile' => 'required',
      ]);
    }
}