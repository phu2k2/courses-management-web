<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetCoursesRequest;
use App\Services\CourseService;
use Illuminate\Contracts\View\View;

class CourseController extends Controller
{
    /**
     * @var CourseService
     */
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
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

        return view('course.show', compact('course'));
    }
}
