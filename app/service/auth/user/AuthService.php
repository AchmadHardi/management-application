<?php

namespace App\Service\Auth\User;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

interface AuthService{

    public function RegisterUser($request);
    public function LoginUser($request);
    public function LogoutUser();


}

?>