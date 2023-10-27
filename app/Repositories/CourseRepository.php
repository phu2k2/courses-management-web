<?php

namespace App\Repositories;

use App\Http\Requests\GetCoursesRequest;
use App\Models\Course;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\CourseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Carbon\Carbon;

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
     * @param Carbon|false $startDate.
     * @param Carbon|false $endDate
     * @param string $dateFormat
     * @param int $instructorId
     * @param int $courseId
     * 
     * @return Collection
     */
    public function getCourseRevenueStatistics($startDate, $endDate, $dateFormat, $instructorId, $courseId): Collection
    {
        return $this->model::selectRaw('DATE_FORMAT(orders.created_at, ?) as date_order, SUM(orders.price) as total_price')
            ->join('orders', 'orders.course_id', '=', 'courses.id')
            ->where('orders.status', 2)
            ->when($instructorId, function ($query) use ($instructorId) {
                return $query->where('courses.instructor_id', $instructorId);
            })
            ->when($courseId, function ($query) use ($courseId) {
                return $query->where('courses.id', $courseId);
            })
            ->when(isset($startDate) && isset($endDate), function ($query) use ($startDate, $endDate) {
                return $query->whereBetween('orders.created_at', [$startDate, $endDate]);
            })
            ->groupBy('date_order')
            ->addBinding($dateFormat, 'select')
            ->get();
    }
}
