<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\RegisterRepositoryInterface;

class RegisterRepository extends BaseRepository implements RegisterRepositoryInterface
{
    /**
     * @return string
     */
    public function getModel()
    {
        return User::class;
    }
}
