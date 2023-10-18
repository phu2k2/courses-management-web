<?php

namespace App\Services;

use App\Repositories\Interfaces\CartRepositoryInterface;

class BadgeService
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
     * @param int $userId
     *
     * @return int
     */
    public function getCountCart($userId)
    {
        return count($this->cartRepo->getCartByUser($userId));
    }
}
