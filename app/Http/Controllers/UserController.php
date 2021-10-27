<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexUsers()
    {
        $users = User::get();
        return $users;
    }
    
    public function showUser($id)
    {
        $user = User::find($id);
        return $user;
    }

}
