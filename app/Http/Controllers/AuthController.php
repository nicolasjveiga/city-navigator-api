<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\AuthResource;
use App\Http\Resources\UserResource;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;

    }

    public function show()
    {
        $user = $this->authService->getProfile();

        return new UserResource($user);
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        $result = $this->authService->register($validated);

        return new AuthResource($result);
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();

        $result = $this->authService->login($validated);

        return new AuthResource($result);
    }
}
