<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\CartRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CartRepository extends BaseRepository implements CartRepositoryInterface
{
    /**
     * Get the model instance for the repository.
     *
     * @return string
     */
    public function getModel(): string
    {
        return Cart::class;
    }

    /**
     * @return Collection
     */
    public function getCartByUser(int $id): Collection
    {
        return $this->model->with('course')->where('user_id', $id)->get();
    }
}
