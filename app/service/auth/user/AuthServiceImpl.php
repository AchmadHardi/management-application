<?php

namespace App\Service\Auth\User;

use App\Models\User;
use App\Helpers\ApiHelper\ApiHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Repository\User\UserRepositoryImpl;
use App\Repository\User\UserRepositoryImplementation;


class AuthServiceImpl implements AuthService {

    protected $user;
    
    public function __construct(UserRepositoryImpl $user)
    {
        $this->user = $user;
    }

    public function registerUser($request)

    {
        return $this->user->createuser($request);
    }

    public function loginUser($request)

    {
        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            throw ValidationException::withMessages([
                'email' => ['The Provided credentials are incorrect.'],
            ]);
        }

        return $user->createtoken('api-token')->plainTextToken;
    }

    public function logoutUser()

    {
        return Auth::user()->currentAccessToken()->delete();
    }
}


?>