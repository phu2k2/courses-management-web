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
     * @param string $id
     * @param array $data
     *
     * @return mixed
     */
    public function updateOrCreateProfile($id, $data)
    {
        return $this->model->with('user')->updateOrCreate(['user_id' => $id], $data);
    }
}
