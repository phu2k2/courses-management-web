<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

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
     * @param string $email
     * @return mixed
     */
    public function getUserByEmail($email)
    {
        return $this->model->where('email', $email)->first();
    }

    /**
     * @param string $email
     * @param string $password
     * @return int|bool
     */
    public function updatePassword($email, $password)
    {
        return $this->model->where("email", $email)->update(["password" => $password]);
    }
}
