<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\CartRepositoryInterface;

class CartRepository extends BaseRepository implements CartRepositoryInterface
{
    public function getModel(): string
    {
        return Cart::class;
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
