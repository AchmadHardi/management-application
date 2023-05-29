<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Service\Auth\User\AuthServiceImpl;


class AuthController extends Controller
{
        protected $auth;

        public function __construct(AuthServiceImpl $auth)
        {
            $this->auth = $auth;
        }

        public function register(RegisterRequest $request)
        {
            // return $request->validated();
            $user = $this->auth->registerUser($request);
            return response()->json($user);
        }

        public function login(LoginRequest $request)
        {
            return $this->auth->loginUser($request);
        }

        public function logout()
        {
            return
            $this->auth->logoutUser();
    }
}