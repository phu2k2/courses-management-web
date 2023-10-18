<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\CartRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

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
     * Add courses into cart
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function addToCart($data): Model
    {
        return $this->model->create($data);
    }

    /**
     * @param int $id of user
     * @return Collection
     */
    public function getCartByUser(int $id): Collection
    {
        return $this->model->with('course:id,title,price,poster_url')->where('user_id', $id)->get();
    }

    /**
     * @param array $id
     * @return bool
     */
    public function deleteMultiple($id)
    {
        $ids = Arr::get($id, 'ids', []);

        return $this->model->whereIn('course_id', $ids)->delete();
    }
}
