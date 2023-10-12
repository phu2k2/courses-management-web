<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * @return string
     */
    public function getModel()
    {
        return User::class;
    }

    /**
     * @param string $userId
     *
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
     */
    public function getInfor($userId)
    {
        return $this->model->with('profile')->find($userId);
    }

    /**
     * Update a record by its primary key.
     *
     * @param int $userId The primary key value.
     * @param array $data The data to update.
     * @return int|bool Whether the update was successful or not.
     */
    public function updateUser(int $userId, array $data)
    {
        return $this->update($userId, $data);
    }
}
