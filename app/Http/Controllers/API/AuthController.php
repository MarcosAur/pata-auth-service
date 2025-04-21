<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserHasPermissionRequest;
use App\Http\Requests\UserRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(LoginRequest $loginRequest){
        $data = $loginRequest->validated();
        $token = $this->authService->login($data);
        return $token;
    }

    public function user(UserRequest $userRequest)
    {
        return Auth::user();
    }

    public function hasPermission(UserHasPermissionRequest $userHasPermissionRequest){
        $data = $userHasPermissionRequest->validated();
        return $this->authService->hasPermission($data);
    }

    public function logout(){
        return $this->authService->logout();
    }
}
