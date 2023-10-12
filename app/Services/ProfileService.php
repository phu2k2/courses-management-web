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

    /**
     * Update or create profile by user id
     *
     * @param mixed $id
     * @param array $data
     *
     * @return mixed
     */
    public function updateProfile($id, array $data)
    {
        return $this->profileRepositoryInterface->updateOrCreateProfile($id, $data);
    }
}
