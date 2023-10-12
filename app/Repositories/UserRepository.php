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
     * @param string $userId
     * @param array $data
     *
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
     */
    public function updateUser($userId, array $data)
    {
        $user = $this->model->with('profile')->find($userId);

        $user->update($data);

        return $user;
    }
}
