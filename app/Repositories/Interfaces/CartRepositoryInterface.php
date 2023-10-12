<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

interface CartRepositoryInterface extends RepositoryInterface
{
    /**
     * Store a newly created resource in storage.
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function addToCart($data): Model;
}
