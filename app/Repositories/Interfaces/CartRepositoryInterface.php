<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;

interface CartRepositoryInterface extends RepositoryInterface
{
    /**
     * Store a newly created resource in storage.
     * @param array $data
     * @return bool
     */
    public function addToCart($data): bool;
}
