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
        return view('course.index');
    }

    public function show(): View
    {
        return View('course.show');
    }
}
