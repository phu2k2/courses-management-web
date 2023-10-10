<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class LessonController extends Controller
{
    public function index(int $lessonId): View
    {
        return view('user.lesson.index');
    }

    public function show(): View
    {
        return view('user.lesson.show');
    }
}
