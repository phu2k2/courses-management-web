<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

interface ProfileRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string $userId
     * @return Model|null
     */
    public function findUser($userId);

    /**
     * Update or create profile by user id
     *
     * @param string $userId
     * @param array $data
     * @return int|bool
     */
    public function updateProfile($userId, $data);
}
