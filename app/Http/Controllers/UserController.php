<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexUsers()
    {
        $users = User::get();
        return view('user.index', compact('users'));
    }
    
    public function showUser($id)
    {
        $userId = User::find($id);
        return view('user.show-id', compact('userId'));
    }

}
