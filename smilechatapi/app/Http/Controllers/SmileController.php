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
        $request->validate([
      'user_id' => 'required|integer',
      'post_id' => 'required|integer',
      'smile' => 'required',
      ]);
        $Smile= new Smile;
        $Smile->user_id=$request->user_id;
        $Smile->post_id=$request->post_id;
        $Smile->smile=$request->smile;
        $Smile=$Smile->save();
    }
    public function update(Request $request, $id)
    {
        $Smile=Smile::find($id);
        $Smile->user_id=$request->user_id;
        $Smile->post_id=$request->post_id;
        $Smile->smile=$request->smile;
        $Smile=$Smile->save();
    }
    public function destroy(Request $request, $id)
    {
        $Smile = Smile::where('id', '=', $id)->first();
        $Smile->delete();
    }
}