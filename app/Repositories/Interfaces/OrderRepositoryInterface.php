<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;

interface OrderRepositoryInterface extends RepositoryInterface
{
    /**
     * Store a newly created resource in storage.
     * @param int $userId
     * @param array $courseId
     * @return bool
     */
}
