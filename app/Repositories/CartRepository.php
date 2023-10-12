<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\CartRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class CartRepository extends BaseRepository implements CartRepositoryInterface
{
    public function getModel(): string
    {
        return Cart::class;
    }

    /**
     * Add courses into cart
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function addToCart($data): Model
    {
        return $this->model->create($data);
    }
}
