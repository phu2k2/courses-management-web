<?php

namespace App\Http\Controllers;

use App\Services\LessonService;
use Illuminate\Contracts\View\View;

class LessonController extends Controller
{
    /**
     * @var LessonService
     */
    protected $lessonService;

    public function __construct(LessonService $lessonService)
    {
        $this->lessonService = $lessonService;
    }

    public function index(): View
    {
        $lessons = $this->lessonService->getAllLesson();

        return view('user.lesson.index', compact('lessons'));
    }

    public function show(): View
    {
        return view('user.lesson.show');
    }
}
