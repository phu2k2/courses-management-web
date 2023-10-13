<?php

namespace App\Services;

use App\Repositories\Interfaces\CartRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class CartService
{
    /**
     * @var CartRepositoryInterface
     */
    protected $cartRepo;

    public function __construct(CartRepositoryInterface $cartRepo)
    {
        $this->cartRepo = $cartRepo;
    }

    /**
     * Add courses into cart
     * @param array $data
     * @param int $userId
     * @param int $courseId
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Exception
     */
    public function addToCart($data, $userId, $courseId): Model
    {
        if ($this->cartRepo->hasCourseInCart($userId, $courseId)) {
            throw new Exception();
        }
        return $this->cartRepo->addToCart($data);
    }

    /**
     * @param int $id of user
     * @return Collection
     */
    public function getCartByUser(int $id): Collection
    {
        return $this->cartRepo->getCartByUser($id);
    }
}
