<?php

namespace App\Repositories;

use App\Http\Requests\GetCoursesRequest;
use App\Models\Course;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\CourseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
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
     * @param GetCoursesRequest $request
     * @return LengthAwarePaginator<Course>
     */
    public function getCourses($request): LengthAwarePaginator
    {
        $courses = Course::with('category')
        ->when($request->filled('search'), function ($query) use ($request) {
            $query->filterBySearchTerm($request->input('search'));
        })
        ->when($request->filled('category'), function ($query) use ($request) {
            $query->filterByCategory($request->input('category'));
        })
        ->when($request->filled('rating'), function ($query) use ($request) {
            $query->filterByRating($request->input('rating'));
        })
        ->when($request->filled('language'), function ($query) use ($request) {
            $query->filterByLanguage($request->input('language'));
        })
        ->when($request->filled('level'), function ($query) use ($request) {
            $query->filterByLevel($request->input('level'));
        })
        ->when($request->filled('price'), function ($query) use ($request) {
            $query->filterByPrice($request->input('price'));
        })
        ->when($request->filled('duration'), function ($query) use ($request) {
            $query->filterByDuration($request->input('duration'));
        });

        if ($request->filled('sort')) {
            list($sortField, $sortType) = explode(':', $request->input('sort'));
            $courses->orderBy($sortField, $sortType);
        }

        $courses->orderBy('id', 'ASC');

        return $courses->paginate(self::PAGESIZE);
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

    /**
     * Find a record by its primary key.
     *
     * @param Date $start_date.
     * @param Date $end_date
     * @param string $dateFormat
     * @param int $instructor_id
     * @param int $course_id
     * 
     * @return Collection
     */
    public function getCourseRevenueStatistics($start_date, $end_date, $dateFormat, $instructor_id, $course_id): Collection
    {
        return $this->model::selectRaw('DATE_FORMAT(orders.created_at, ?) as date_order, SUM(orders.price) as total_price')
            ->join('orders', 'orders.course_id', '=', 'courses.id')
            ->where('orders.status', 2)
            ->when($instructor_id, function ($query) use ($instructor_id) {
                return $query->where('courses.instructor_id', $instructor_id);
            })
            ->when($course_id, function ($query) use ($course_id) {
                return $query->where('courses.id', $course_id);
            })
            ->when(isset($start_date) && isset($end_date), function ($query) use ($start_date, $end_date) {
                return $query->whereBetween('orders.created_at', [$start_date, $end_date]);
            })
            ->groupBy('date_order')
            ->addBinding($dateFormat, 'select')
            ->get();
    }
}
