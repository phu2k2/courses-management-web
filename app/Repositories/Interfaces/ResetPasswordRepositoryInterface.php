<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;

interface ResetPasswordRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string $email
     * @return mixed
     */
    public function getByEmail($email);
    /**
     * @param string $email
     * @param string $token
     * @param mixed $createdTime
     * @param mixed $expiredTime
     * @return mixed
     */
    public function addResetPassWord($email, $token, $createdTime, $expiredTime);
    /**
     * @param string $email
     * @return int|bool True if the deletion was successful, false otherwise.
     */
    public function deleteByEmail($email);
    /**
     * @param string $email
     * @param string $token
     * @return mixed
     */
    public function isValidToken($token, $email);
    /**
     * @param string $token
     * @param mixed $expiredTime
     * @return mixed
     */
    public function isExpiredToken($token, $expiredTime);
}
