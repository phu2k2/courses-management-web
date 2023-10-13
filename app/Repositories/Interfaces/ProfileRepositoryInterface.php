<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;

interface ProfileRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string $userId
     * @return mixed
     */
    public function findUser($userId);
}
