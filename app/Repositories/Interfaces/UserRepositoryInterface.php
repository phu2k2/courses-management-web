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
     * @param int $userId
     *
     * @return mixed
     */
    public function updateUser(int $userId, array $data);
}
