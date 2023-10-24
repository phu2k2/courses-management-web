<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetCoursesRequest;
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

    public function __construct(CourseService $courseService, ReviewService $reviewService)
    {
        $this->courseService = $courseService;
        $this->reviewService = $reviewService;
    }

    /**
     * @return View
     */
    public function index(GetCoursesRequest $request): View
    {
        $courses = $this->courseService->getCourses($request);

        return view('course.index', compact('courses'));
    }

    /**
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        $course = $this->courseService->getCourse($id);
        $reviews = $this->reviewService->getReviewsByCourse($id);

        return view('course.show', compact('course', 'reviews'));
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
