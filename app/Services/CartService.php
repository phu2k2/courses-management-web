<?php

namespace App\Services;

use App\Repositories\Interfaces\CartRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

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
}
