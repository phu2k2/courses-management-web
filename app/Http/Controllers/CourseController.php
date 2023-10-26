<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetCoursesRequest;
use App\Services\CategoryService;
use App\Services\CourseService;
use App\Services\ReviewService;
use Illuminate\Contracts\View\View;

class CourseController extends Controller
{
    /**
     * @var CourseService
     */
    protected $courseService;

    /**
     * @var ReviewService
     */
    protected $reviewService;

    /**
     * @var CategoryService
     */
    protected $categoryService;

    public function __construct(CourseService $courseService, ReviewService $reviewService, CategoryService $categoryService)
    {
        $this->courseService = $courseService;
        $this->reviewService = $reviewService;
        $this->categoryService = $categoryService;
    }

    /**
     * @return View
     */
    public function index(GetCoursesRequest $request): View
    {
        $courses = $this->courseService->getCourses($request);

        $courses->appends($request->validated());

        $categories = $this->categoryService->getAll(['id', 'name']);

        return view('course.index', compact('courses', 'categories'));
    }

    /**
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        $course = $this->courseService->getCourse($id);
        $reviews = $this->reviewService->getReviewsByCourse($id);
        $enrolled = false;
        if (auth()->check()) {
            $enrolled = $this->courseService->isEnrolled((int) auth()->id(), $id);
        }

        return view('course.show', compact('course', 'reviews', 'enrolled'));
    }

    /**
     * @return View
     */
    public function getMyCourses(): View
    {
        $courses = $this->courseService->getMyCourses((int) auth()->id());

        return view('user.course.index', compact('courses'));
    }
}
