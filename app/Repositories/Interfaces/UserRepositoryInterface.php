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
    public function getInfor($userId);
    /**
     * @param string $email
     * @return mixed
     */
    public function getUserByEmail($email);
    /**
     * @param string $email
     * @param string $password
     * @return int|bool
     */
    public function updatePassword($email, $password);
}
