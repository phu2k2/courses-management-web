<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getListCourses(): View
    {
        return view('user.course.index');
    }

    public function getCourseDetail(int $id): View
    {
        return view('user.course.show');
    }
}
