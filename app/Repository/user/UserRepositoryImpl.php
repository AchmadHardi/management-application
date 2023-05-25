<?php

namespace App\Repository\User;

use App\Models\User;
use Illuminate\Http\Request;

class UserRepositoryImpl implements UserRepository
{
    public function getUsers()
    {
        return User::all();
    }

    public function getUserById($id)
    {
        return User::find($id);
    }

    public function createUser(Request $request)
    {
        return User::create($request->all());
    }

    public function editUser(Request $request, $id)
    {
        $user = User::find($id);
        return $user->update($request->all());
    }

    public function deleteUser($id)
    {
        return User::destroy($id);
    }
}