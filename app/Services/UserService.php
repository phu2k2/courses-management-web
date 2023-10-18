<?php

namespace App\Services;

use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use AmazonS3;
use App\Helpers\AmazonS3 as HelpersAmazonS3;

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
     * @param array $request
     *
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
     * Gennerate presigned upload url has expried time.
     *
     * @param string $path of image
     * @return string
     */
    public function getImageFromMinio(string $path)
    {
        return AmazonS3::getObjectUrl($path);
    }

    /**
     * @param mixed $userId
     *
     * @return mixed
     */
    public function getInfor($userId)
    {
        $user = $this->userRepository->getInfor($userId);
        $user->profile->avatar = $this->getImageFromMinio($user->profile->avatar);

        return $user;
    }

    /**
     * @param mixed $userId
     * @param array $data
     * @return int|bool
     */
    public function updateUser($userId, $data)
    {
        return $this->userRepository->update($userId, $data);
    }
}
