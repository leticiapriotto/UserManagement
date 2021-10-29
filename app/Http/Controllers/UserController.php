<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexUsers()
    {
        $users = User::simplePaginate(10);
        return view('user.index', compact('users'));
    }
    
    public function showUser($id)
    {
        $userId = User::find($id);
        return view('user.show-id', compact('userId'));
    }

    public function createUser()
    {
        return view('user.create');
    }

    public function storeUser(StoreUpdateUserRequest $request)
    {
        $users = User::get();
        User::create([

            'name' => $request->name,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'birth_date' => $request->birth_date,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,

        ]);

        return redirect('/users')->with('messageNewUser', 'New user created successfully');
    }

    public function updateUser(StoreUpdateUserRequest $request, $id)  
    {
        User::where('id', $id)->update ([

            'name' => $request->name,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'birth_date' => $request->birth_date,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,

        ]);

        return redirect('/users/show/'.$id)->with('message', 'User updated successfully');
    }

    public function deleteUser($id) 
    {
        User::destroy($id);
        return redirect('/users')->with('messageDeletedUser', 'User deleted successfully');
    }

}
