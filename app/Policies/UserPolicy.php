<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     * 用户更新时的权限验证
     * @return void
     */
    public function __construct()
    {
        use HandlesAuthorization;
        public function update(User $currentUser,User $user){
            return $currentUser->id === $user->id;
        }
    }
}
