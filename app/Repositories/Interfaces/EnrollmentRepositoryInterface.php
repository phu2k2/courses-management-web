<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Enrollment;

interface EnrollmentRepositoryInterface extends RepositoryInterface
{
    /**
     * @param int $userId
     *
     * @return LengthAwarePaginator<Enrollment>
     */
    public function getMyCoures($userId): LengthAwarePaginator;

    /**
     * @param int $userId
     * @param int $courseId
     *
     * @return int
     */
    public function isEnrolled($userId, $courseId);
}
