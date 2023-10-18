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
     * @param array $filters
     * @return LengthAwarePaginator<Model>
     */
    public function getCourses($filters): LengthAwarePaginator
    {
        return Course::query()
        ->join('categories', 'courses.category_id', '=', 'categories.id')
        ->when(isset($filters['search']), function ($query) use ($filters) {
            $searchTerm = $filters['search'];
            return $query->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', "%$searchTerm%")
                    ->orWhere('description', 'like', "%$searchTerm%");
            });
        })
        ->when(isset($filters['category']), function ($query) use ($filters) {
            $query->whereIn('categories.name', $filters['category']);
        })
        ->when(isset($filters['rating']), function ($query) use ($filters) {
            $query->where('average_rating', '>=', $filters['rating']);
        })
        ->when(isset($filters['language']), function ($query) use ($filters) {
            $query->whereIn('languages', $filters['language']);
        })
        ->when(isset($filters['level']), function ($query) use ($filters) {
            $query->whereIn('level', $filters['level']);
        })
        ->when(isset($filters['price']), function ($query) use ($filters) {
            if ($filters['price'] === 'free') {
                return $query->where('price', 0);
            } elseif ($filters['price'] === 'paid') {
                return $query->where('price', '>', 0);
            }
        })
        ->when(isset($filters['duration']), function ($query) use ($filters) {
            $durations = $filters['duration'];

            return $query->where(function ($query) use ($durations) {
                if (in_array('extraShort', $durations)) {
                    $query->orWhereBetween('total_time', [0, 1]);
                }
                if (in_array('short', $durations)) {
                    $query->orWhereBetween('total_time', [1, 3]);
                }
                if (in_array('medium', $durations)) {
                    $query->orWhereBetween('total_time', [3, 6]);
                }
                if (in_array('long', $durations)) {
                    $query->orWhereBetween('total_time', [6, 17]);
                }
                if (in_array('extraLong', $durations)) {
                    $query->orWhere('total_time', '>', 17);
                }
            });
        })
        ->when(isset($filters['sort']), function ($query) use ($filters) {
            return $query->orderBy('courses.' . $filters['sort'], 'desc');
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
        return $this->model->with('category:id,name')->findOrFail($id);
    }
}
