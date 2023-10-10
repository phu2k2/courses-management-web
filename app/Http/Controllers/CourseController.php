<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        return view('user.course.index');
    }

    public function show(): View
    {
        return view('user.course.show');
    }
}
