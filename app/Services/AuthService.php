<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\Auth\UserNotFoundException;
use App\Exceptions\InvalidCredentialsException;

class AuthService
{
    public function getProfile(): User
    {
        return Auth::user();
    }

    public function register(array $data): array
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => 'user',
        ]);;

        $token = $user->createToken('UserToken')->plainTextToken;

        return ['user' => $user, 'token' => $token];
    }

    public function login(array $credentials): array
    {
        $user = User::where('email', $credentials['email'])->first();

        if (!$user){
            echo "usuario nao existe :)";
            //throw new UserNotFoundException();
        }

        if (!Hash::check($credentials['password'], $user->password)) {
            throw new InvalidCredentialsException();
        }

        $token = $user->createToken('UserToken')->plainTextToken;

        return ['user' => $user, 'token' => $token];
    }
}
