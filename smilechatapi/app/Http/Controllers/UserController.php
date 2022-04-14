<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        return User::all();
    }
    public function show(User $User) {
        return $User;
    }
    public function store(Request $request)
    {
      $this->validate($request, [
      'name' => 'required|max:255',
      'surname' => 'required|max:255',
      'username' => 'required|max:255',
      'email' => 'required|max:255',
      'email_verified_at' => 'required|integer|digits:5',
      'password' => 'required',
      'User_photo' => 'required',
      'bio' => 'required'
      ]);
    }
    public function update(Request $request, $id)
    {
        $User = User::where('id', '=', $id)->first();
        $User->update($request->all());
    }
    public function destroy(Request $request, $id)
    {
        $user = User::where('id', '=', $id)->first();
        $user->delete();
    }
    function getData(Request $request)
        {
            $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required',
            'password'=>'required',

        ]);
            return $request->input();
        }
}
