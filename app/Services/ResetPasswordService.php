<?php

namespace App\Services;

use App\Repositories\Interfaces\ResetPasswordRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
     * @param mixed $createdTime
     * @param mixed $expiredTime
     * @return Model
     */
    public function addResetPassWord($email, $token, $createdTime, $expiredTime)
    {
        return $this->resetPasswordRepo->addResetPassWord($email, $token, $createdTime, $expiredTime);
    }

    /**
     * @param string $email
     * @return int|bool True if the deletion was successful, false otherwise.
     */
    public function deleteByEmail($email)
    {
        return $this->resetPasswordRepo->deleteByEmail($email);
    }

    /**
     * @param string $token
     * @return int|bool True if the deletion was successful, false otherwise.
     */
    public function deleteByToken($token)
    {
        return $this->resetPasswordRepo->deleteByToken($token);
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
     * @param mixed $expiredTime
     * @return mixed
     */
    public function isExpiredToken($token, $expiredTime)
    {
        return $this->resetPasswordRepo->isExpiredToken($token, $expiredTime);
    }
}
