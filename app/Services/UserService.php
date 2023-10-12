<?php

namespace App\Services;

use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class UserService
{
    /**
     * @var userRepositoryInterface
     */
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return void
     */
    public function create(array $request)
    {
        $attribute = Arr::except($request, ['password', 'username']);
        $attribute['username'] = strtolower($request['username']);
        $attribute['password'] = Hash::make($request['password']);
        $this->userRepository->create($attribute);
    }

    /**
     * @param mixed $userId
     *
     * @return mixed
     */
    public function getInfor($userId)
    {
        return $this->userRepository->getInfor($userId);
    }
}
