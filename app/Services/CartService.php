<?php

namespace App\Services;

use App\Repositories\CartRepository;
use Illuminate\Database\Eloquent\Collection;

class CartService
{
    /**
     * @var CartRepository
     */
    private $cartRepository;

    public function __construct(CartRepository $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    /**
     * @return Collection
     */
    public function getCartByUser(int $id): Collection
    {
        return $this->cartRepository->getCartByUser($id);
    }
}
