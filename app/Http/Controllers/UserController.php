<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get()->where('admin', false);
        return view('admin.users.index', compact('users'));
    }

    public function share()
    {
        $users = User::all();
        return view('/', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->resource()->delete();
        $user->reserve()->delete();
        $user->delete();
        return redirect()->route('admin.users.index')->withMessage('Usuario eliminado correctamente.');
    }
}
