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

    public function show(): View
    {
        return view('user.lesson.show');
    }

    public function getLessonTopic(int $id): View
    {
        $lesson = $this->lessonService->getLessonByTopic($id);

        return view('user.lesson.index', compact('lesson'));
    }
}
