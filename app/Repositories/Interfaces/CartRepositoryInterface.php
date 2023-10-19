<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface CartRepositoryInterface extends RepositoryInterface
{
    public function getCartByUser(int $id): Collection;
    /**
     * Store a newly created resource in storage.
     * @param int $userId
     * @param int $courseId
     * @return bool
     */
    public function hasCourseInCart(int $userId, int $courseId): bool;

    /**
     * @param array $id
     * @return bool
     */
    public function deleteMultiple($id);
}
