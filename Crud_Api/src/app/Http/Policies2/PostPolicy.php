<?php

namespace Nima\Crud_Api\App\Policies;

use App\Models\User as User2;
use Nima\Crud\App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
