<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * @return string
     */
    public function getModel()
    {
        return User::class;
    }
}
