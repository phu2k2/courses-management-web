<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Brick\Math\BigInteger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Ramsey\Uuid\Type\Integer;

interface CartRepositoryInterface extends RepositoryInterface
{
    public function getCartByUser(int $id): Collection;
    /**
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function addToCart($data): Model;
    /**
     * Check the presence of courses whether are in cart or not.
     * @param int $userId
     * @param int $courseId
     * @return bool
     */
    public function hasCourseInCart($userId, $courseId): bool;
}
