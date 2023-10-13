<?php

namespace App\Repositories;

use App\Models\Profile;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\ProfileRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

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
     * @return Model|Collection|static[]|static|null
     */
    public function findUser($userId)
    {
        return $this->model->where("user_id", $userId)->get();
    }
}
