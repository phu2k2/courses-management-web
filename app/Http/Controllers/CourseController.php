<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        return view('course.index');
    }

    public function show(int $id): View
    {
        return view('course.show');
    }
}
