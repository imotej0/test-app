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
        $request->validate([
      'user_id1' => 'required|integer',
      'user_id2' => 'required|integer'
      ]);
        $Friends= new Friends;
        $Friends->user_id1=$request->user_id1;
        $Friends->user_id2=$request->user_id2;
        $Friends=$Friends->save();
        return $Friends;
    }
    public function update(Request $request, $id)
    {
        $Friends=Friends::find($id);
        $Friends->user_id1=$request->user_id1;
        $Friends->user_id2=$request->user_id2;
        $Friends=$Friends->save();
        return $Friends;
    }
    public function destroy(Request $request, $id)
    {
        $Friends = Friends::where('id', '=', $id)->first();
        $Friends->delete();
    }
}
