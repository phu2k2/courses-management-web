<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function getLesson(int $id): View
    {
        return view('user.lesson.index');
    }
}
