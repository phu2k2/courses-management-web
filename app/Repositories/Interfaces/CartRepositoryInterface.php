<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface CartRepositoryInterface extends RepositoryInterface
{
    public function getCartByUser(int $id): Collection;
}
