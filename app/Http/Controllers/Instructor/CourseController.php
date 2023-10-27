<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CourseController extends Controller
{
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
