<?php

namespace App\Services;

use App\Repositories\Interfaces\ProfileRepositoryInterface;

class ProfileService
{
    /**
     * @var profileRepositoryInterface
     */
    protected $profileRepositoryInterface;

    public function __construct(ProfileRepositoryInterface $profileRepositoryInterface)
    {
        $this->profileRepositoryInterface = $profileRepositoryInterface;
    }

    public function updateProfile($profileId, array $data)
    {
        return $this->profileRepositoryInterface->updateOrCreateProfile($profileId, $data);
    }
}
