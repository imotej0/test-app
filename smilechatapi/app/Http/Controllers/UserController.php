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
        $request->validate([
      'name' => 'required|max:255',
      'surname' => 'required|max:255',
      'username' => 'required|max:255',
      'email' => 'required|max:255',
      'password' => 'required',
      'user_photo' => 'required',
      'bio' => 'required'
      ]);
        $User= new User;
        $User->name=$request->name;
        $User->surname=$request->surname;
        $User->username=$request->username;
        $User->email=$request->email;
        $User->password=$request->password;
        $User->user_photo=$request->user_photo;
        $User->bio=$request->bio;
        $User=$User->save();
    }
    public function update(Request $request, $id)
    {
        $User=User;
        $User->name=$request->name;
        $User->surname=$request->surname;
        $User->username=$request->username;
        $User->email=$request->email;
        $User->password=$request->password;
        $User->user_photo=$request->user_photo;
        $User->bio=$request->bio;
        $User=$User->save();
    }
    public function destroy(Request $request, $id)
    {
        $user = User::where('id', '=', $id)->first();
        $user->delete();
    }
}
