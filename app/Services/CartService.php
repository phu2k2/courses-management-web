<?php

namespace App\Services;

use App\Repositories\Interfaces\CartRepositoryInterface;
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
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function addToCart($data): Model
    {
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

    /**
     * Delete a record by course id.
     *
     * @param string $id .
     * @return bool True if the deletion was successful, false otherwise.
     */
    public function deleteCart($id)
    {
        return $this->cartRepo->deleteCart($id);
    }
}
