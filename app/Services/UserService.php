<?php

namespace App\Services;

use App\Repositories\Interfaces\UserRepositoryInterface;

class UserService
{
    protected UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param string $userId
     *
     * @return mixed
     */
    public function getInfor($userId)
    {
        return $this->userRepository->getInfor($userId);
    }
}
