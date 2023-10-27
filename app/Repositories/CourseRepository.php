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
     * @param int $instructorId
     * @param int $courseId
     * @param string $startDate
     * @param string $endDate
     * @param string $type
     * @return Collection
     */
    public function totalStudentsByTime($instructorId, $courseId, $startDate, $endDate, $type): Collection
    {
        return $this->model->join('enrollments as e', 'courses.id', '=', 'e.course_id')
            ->selectRaw($type . ' as enrollment_date, COUNT(*) as total_student')
            ->where('courses.instructor_id', $instructorId)
            ->when(isset($courseId), function ($query) use ($courseId) {
                return $query->where('courses.id', $courseId);
            })
            ->where('e.created_at', '>=', $startDate)
            ->where('e.created_at', '<=', $endDate)
            ->groupBy('enrollment_date')
            ->orderBy('enrollment_date')->get();
    }
}
