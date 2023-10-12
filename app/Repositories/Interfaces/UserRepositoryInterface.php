<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;

interface UserRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string $userId
     *
     * @return mixed
     */
    public function getInfor(mixed $userId);

    /**
     * @param string $userId
     *
     * @return mixed
     */
    public function updateUser($userId, array $data);
}
