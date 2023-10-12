<?php

namespace App\Repositories\Interfaces;

use App\Repositories\Interfaces\RepositoryInterface;

interface UserRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string $userId
     *
     * @return mixed
     */
    public function getInfor(mixed $userId);
}
