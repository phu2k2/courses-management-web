<?php

namespace App\Repositories;

use App\Models\Course;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\CourseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class CourseRepository extends BaseRepository implements CourseRepositoryInterface
{
    protected const PAGESIZE = 10;

    public function getModel(): string
    {
        return Course::class;
    }

    /**
     * @return LengthAwarePaginator<\Illuminate\Database\Eloquent\Model>
     */
    public function getListCourses(): LengthAwarePaginator
    {
        return $this->model->with('category')->paginate(self::PAGESIZE);
    }

    /**
     * Find a record by its primary key.
     *
     * @param int $id The primary key value.
     * @return \Illuminate\Database\Eloquent\Model|null The found model or null if not found.
     */
    public function find($id): Model|null
    {
        return $this->model->with(['category', 'topics.lessons'])->find($id);
    }
}
