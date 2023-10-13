<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class LessonController extends Controller
{
    public function index(): View
    {
        return view('lesson.index');
    }

    public function show(): View
    {
        return view('lesson.show');
    }
}
