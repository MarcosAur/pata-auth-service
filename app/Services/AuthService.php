<?php

namespace App\Services;

use App\Helpers\UserHasPermissionHelper;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function login(array $data){
        $user = User::where('email', $data['email'])->first();
        return $user->createToken('login')->plainTextToken;
    }

    public function hasPermission(array $data): bool
    {
        return UserHasPermissionHelper::run(Auth::user(), $data['permission']);
    }

    public function logout(){
        return Auth::user()->tokens()->delete();
    }

}
