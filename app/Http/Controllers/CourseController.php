<?php

namespace App\Http\Controllers;

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
    public function index(): View
    {
        $listCourses = $this->courseService->getListCourses();

        return View('user.course.index');
    }
}
