<?php

namespace App\Repositories;

use App\Models\Profile;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\ProfileRepositoryInterface;

class ProfileRepository extends BaseRepository implements ProfileRepositoryInterface
{
    /**
     * @return string
     */
    public function getModel()
    {
        return Profile::class;
    }

    /**
     * Update or create profile by user id
     *
     * @param string $userId
     *
     * @return mixed
     */
    public function findByUserId($userId)
    {
        return $this->model->where("user_id", $userId)->get();
    }
}
