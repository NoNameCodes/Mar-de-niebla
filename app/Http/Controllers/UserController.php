<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('admin-dashboard', compact('users'));
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.users.index')->withMessage('User deleted successfully');
    }

    public function share() {

        $users = User::all();
        return view('/', compact('users'));
    }

    public function destroy($id){
        $user = User::find($id);
        $user->resource()->delete();
        $user->reserve()->delete();
        $user->delete();
        return redirect()->route('admin.users.index')->withMessage('User deleted successfully');
    }
}
