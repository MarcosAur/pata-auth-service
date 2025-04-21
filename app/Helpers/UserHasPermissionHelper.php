<?php

namespace App\Helpers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserHasPermissionHelper
{
    public static function run(User $user, string $necessaryPermission): bool
    {
        $userHasPermission = false;
        foreach ($user->role->permissions as $permission) {
            if ($necessaryPermission === $permission->name) {
                $userHasPermission = true;
                break;
            }
        }

        return $userHasPermission;
    }
}
