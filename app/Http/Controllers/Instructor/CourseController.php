<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseRequest;
use App\Services\CategoryService;
use App\Services\CourseService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CourseController extends Controller
{
    /**
     * @var CategoryService
     */
    protected $categoryService;

    /**
     * @var CourseService;
     */
    protected $courseService;

    public function __construct(CategoryService $categoryService, CourseService $courseService)
    {
        $this->categoryService = $categoryService;
        $this->courseService = $courseService;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = $this->categoryService->getAll();
        return view('instructor.course.create', compact('categories'));
    }

    public function upload(): View
    {
        return view('instructor.course.upload');
    }

    public function store(StoreCourseRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['instructor_id'] = auth()->id();
        $this->courseService->create($data);

        return redirect()->route('instructor.courses.upload');
    }
}
