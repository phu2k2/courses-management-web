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
     * Retrieve a paginated list of courses based on the provided filters.
     *
     * @param array $filters
     * @return LengthAwarePaginator<Course>
     */
    public function getCourses(array $filters): LengthAwarePaginator
    {
        return Course::query()
        ->join('categories', 'courses.category_id', '=', 'categories.id')
        ->when(isset($filters['search']), function ($query) use ($filters) {
            $query->filterBySearchTerm($filters['search']);
        })
        ->when(isset($filters['category']), function ($query) use ($filters) {
            $query->filterByCategory($filters['category']);
        })
        ->when(isset($filters['rating']), function ($query) use ($filters) {
            $query->filterByRating($filters['rating']);
        })
        ->when(isset($filters['language']), function ($query) use ($filters) {
            $query->filterByLanguage($filters['language']);
        })
        ->when(isset($filters['level']), function ($query) use ($filters) {
            $query->filterByLevel($filters['level']);
        })
        ->when(isset($filters['price']), function ($query) use ($filters) {
            $query->filterByPrice($filters['price']);
        })
        ->when(isset($filters['duration']), function ($query) use ($filters) {
            $query->filterByDuration($filters['duration']);
        })
        ->when(isset($filters['sort']), function ($query) use ($filters) {
            $query->filterBySort($filters['sort']);
        })
        ->whereNull('categories.deleted_at')
        ->paginate(self::PAGESIZE);
    }

    /**
     * Find a record by its primary key.
     *
     * @param int $id The primary key value.
     * @return Model
     */
    public function findOrFail($id): Model
    {
        return $this->model->with(['category:id,name', 'topics.lessons:id,topic_id,title'])->findOrFail($id);
    }
}
