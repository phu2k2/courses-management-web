<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Services\CourseService;

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
    public function index(): View
    {
        $courses = $this->courseService->getInstructorCourses((int)auth()->id());
        return view('instructor.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {

        return view('instructor.course.create');
    }

    public function upload(): View
    {
        return view('instructor.course.upload');
    }

    public function store(): RedirectResponse
    {
        return redirect()->route('instructor.courses.upload');
    }
}
