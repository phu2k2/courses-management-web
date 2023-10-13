<?php

namespace App\Services;

use App\Repositories\Interfaces\ProfileRepositoryInterface;

class ProfileService
{
    /**
     * @var profileRepositoryInterface
     */
    protected $profileRepository;

    public function __construct(ProfileRepositoryInterface $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    /**
     * Update or create profile by user id
     *
     * @param mixed $userId
     * @param array $data
     *
     * @return mixed
     */
    public function updateOrCreateProfile($userId, array $data)
    {
        $profile = $this->profileRepository->findByUserId($userId);

        if (!$profile) {
            return $this->profileRepository->create($data);
        }
        return $this->profileRepository->update($userId, $data);
    }
}
