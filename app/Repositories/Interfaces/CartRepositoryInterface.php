<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

interface CartRepositoryInterface extends RepositoryInterface
{
    public function getCartByUser(int $id): Collection;
    /**
     * Store a newly created resource in storage.
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function addToCart($data): Model;

    /**
     * Delete a record by course id.
     *
     * @param string $id .
     * @return bool True if the deletion was successful, false otherwise.
     */
    public function deleteCart($id);
}
