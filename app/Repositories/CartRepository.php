<?php

namespace App\Repositories;

use App\Models\Course;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\CartRepositoryInterface;

class CartRepository extends BaseRepository implements CartRepositoryInterface
{
    public function getModel(): string
    {
        return Course::class;
    }

    /**
     * Add courses into cart
     * @param array $data
     * @return bool
     */
    public function addToCart($data): bool
    {
        return $this->model->insert($data);
    }
}
