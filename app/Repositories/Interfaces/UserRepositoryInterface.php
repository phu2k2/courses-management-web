<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

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
     * @param string $password
     * @return int|bool
     */
    public function updatePassword($email, $password);

    /**
     * @param int $userId
     * @return Model|null
     */
    public function findRoleInstructor($userId);

    /**
     * @param string $token
     * @param string $timeSubmit
     *
     * @return bool
     */
    public function isExpiredToken($token, $timeSubmit);

    /**
     * @param string $token
     *
     * @return Model|null
     */
    public function findUser($token);
}
