<?php

namespace App\Repositories;

use App\Http\Requests\GetCoursesRequest;
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
     * @param int $id
     * @return LengthAwarePaginator<Model>
     */
    public function getInstructorCourses($id): LengthAwarePaginator
    {
        return $this->model->with('user:id')->where('instructor_id', $id)->paginate(self::PAGESIZE);
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
     * @param array $courseIds
     * @return int
     */
    public function addStudentInCourse($courseIds)
    {
        return $this->model->whereIn('id', $courseIds)->increment('total_students');
    }

    /**
     * @param array $categoryIds
     * @param string $language
     * @param string $level
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function recommnedCourse($categoryIds, $language, $level)
    {
        return $this->model->with('category')
            ->where(function ($query) use ($categoryIds, $language, $level) {
                $query->whereIn('category_id', $categoryIds)
                    ->orWhere('languages', $language)
                    ->orWhere('level', $level);
            })
            ->inRandomOrder()
            ->take(self::PAGESIZE)
            ->get();
    }
}
