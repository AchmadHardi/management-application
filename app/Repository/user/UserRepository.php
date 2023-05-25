<?php

namespace App\Repository\User;

use Illuminate\Http\Request;

interface UserRepository
{
    public function getUsers();
    public function getUserById($id);
    public function createUser(Request $request);
    public function editUser(Request $request, $id);
    public function deleteUser($id);
}