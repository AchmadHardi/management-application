<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\User\UserRepositoryImpl;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserRepositoryImpl $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return response()->json($this->user->getUsers());
    }

    public function show($id)
    {
        return response()->json($this->user->getUserById($id));
    }

    public function store(Request $request)
    {
        return response()->json($this->user->createUser($request));
    }

    public function edit(Request $request, $id)
    {
        return response()->json($this->user->editUser($request, $id));
    }

    public function delete($id)
    {
        return response()->json($this->user->deleteUser($id));
    }
}