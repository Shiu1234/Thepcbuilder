<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisteredController extends Controller
{
    public function index()
    {

      $users=User::all();
      return view('admin.users.index')->with('users',$users);
    }

    public function edit($id){

      $users_role =User::find($id);

      return view('admin.users.edit')->with('users_role' ,$users_role);

    }

    public function update(Request $request ,$id)
    {

        $users =User::find($id);
        $users->name= $request->input('name');
        $users->role_as= $request->input('roles');
          $users->isban= $request->input('isban');
        $users->update();

        return redirect()->back()->with('status','role is updated');

    }

    public function delete(Request $request ,$id)
    {

        $users =User::find($id);

        $users->delete();

        return redirect()->back()->with('status','role is deleted successfully');

    }
}
