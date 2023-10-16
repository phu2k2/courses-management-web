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
     * @return LengthAwarePaginator<Model>
     */
    public function getCourses(): LengthAwarePaginator
    {
        return $this->model->with('category:id,name')->paginate(self::PAGESIZE);
    }

    /**
     * Find a record by its primary key.
     *
     * @param int $id The primary key value.
     * @return Model
     */
    public function findWithCategory($id): Model
    {
        return $this->model->with('category:id,name')->findOrFail($id);
    }
}
