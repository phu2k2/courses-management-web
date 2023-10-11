<?php

namespace App\Services;

use App\Repositories\Interfaces\ProfileRepositoryInterface;

class ProfileService
{
    protected ProfileRepositoryInterface $profileRepository;

    public function __construct(ProfileRepositoryInterface $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }
}
