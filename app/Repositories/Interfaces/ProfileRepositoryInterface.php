<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;

interface ProfileRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string $userId
     * @param array $data
     *
     * @return mixed
     */
    public function updateOrCreateProfile(mixed $userId, array $data);
}
