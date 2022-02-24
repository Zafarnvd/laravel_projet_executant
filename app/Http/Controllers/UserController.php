<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function edit()
    {
        $roles = Role::all();
        $avatars = Avatar::all();
        return view('profil.edit', compact('roles', 'avatars'));
    }
    
    public function update(Request  $request, $id)
    {
        // $avatar = Storage::disk('public')->put('',$request->avatar);
        $user = User::find($id);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->avatar_id = $request->avatar_id;
        $user->role_id = $request->role_id;
        $user->age = $request->age;
        $user->password = Hash::make($request->password);
        $user -> save();
        return redirect('/dashboard');
    }

    public function index()
    {
        $users=User::all();
        return view('users.index', compact('users'));
    }

    public function editUser($user)
    {
        $roles = Role::all();
        $avatars = Avatar::all();
        $user = User::find($user);
        return view('users.edit', compact('roles', 'avatars','user'));
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user -> delete();
        return redirect('/users');
    }
}
