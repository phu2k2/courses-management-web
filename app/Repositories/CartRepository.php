<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\CartRepositoryInterface;
use Brick\Math\BigInteger;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

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
     * Check the presence of courses whether are in cart or not.
     * @param int $userId
     * @param int $courseId
     * @return bool
     */
    public function hasCourseInCart($userId, $courseId): bool
    {
        return $this->model->where('user_id', $userId)->where('course_id', $courseId)->exists();
    }

    /**
     * @param int $id of user
     * @return Collection
     */
    public function getCartByUser(int $id): Collection
    {
        return $this->model->with('course:id,title,price,poster_url')->where('user_id', $id)->get();
    }
}
