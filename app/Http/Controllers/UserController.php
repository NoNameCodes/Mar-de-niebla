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
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.users.index')->withMessage('User deleted successfully');
    }
}
