<?php

namespace App\Services;

use App\Repositories\Interfaces\ProfileRepositoryInterface;

class ProfileService
{
    /**
     * @var profileRepositoryInterface
     */
    protected $profileRepo;

    public function __construct(ProfileRepositoryInterface $profileRepo)
    {
        $this->profileRepo = $profileRepo;
    }

    /**
     * Update or create profile by user id
     *
     * @param mixed $userId
     * @param array $data
     * @return mixed
     */
    public function updateOrCreateProfile($userId, array $data)
    {
        $profile = $this->profileRepo->findUser($userId);

        if (!$profile) {
            return $this->profileRepo->create($data);
        }
        return $this->profileRepo->update($userId, $data);
    }
}
