<?php

namespace App\Services;

use App\Repositories\Interfaces\ResetPasswordRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ResetPasswordService
{
    /**
     * @var ResetPasswordRepositoryInterface
     */
    protected $resetPasswordRepo;

    public function __construct(ResetPasswordRepositoryInterface $resetPasswordRepo)
    {
        $this->resetPasswordRepo = $resetPasswordRepo;
    }

    /**
     * @param string $email
     * @return mixed
     */
    public function getByEmail($email)
    {
        return $this->resetPasswordRepo->getByEmail($email);
    }

    /**
     * @param string $email
     * @param string $token
     * @param string $createdTime
     * @param string $expiredTime
     * @return Model
     */
    public function addResetPassWord($email, $token, $createdTime, $expiredTime)
    {
        return $this->resetPasswordRepo->addResetPassWord($email, $token, $createdTime, $expiredTime);
    }

    /**
     * Delete a record based on email or token.
     *
     * @param string $field The field to search ('email' or 'token').
     * @param string $value The value to search for.
     * @return int|bool True if the deletion was successful, false otherwise.
     */
    public function deleteByField($field, $value)
    {
        return $this->resetPasswordRepo->deleteByField($field, $value);
    }

    /**
     * @param string $email
     * @param string $token
     * @return mixed
     */
    public function isValidToken($token, $email)
    {
        return $this->resetPasswordRepo->isValidToken($token, $email);
    }

    /**
     * @param string $token
     * @param string $expiredTime
     * @return mixed
     */
    public function isExpiredToken($token, $expiredTime)
    {
        return $this->resetPasswordRepo->isExpiredToken($token, $expiredTime);
    }
}
