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

    public function getLessonTopic(int $courseId, int $lessonId): View
    {
        $lesson = $this->lessonService->getLessonByTopic($courseId, $lessonId);

        $lessons = $this->lessonService->getLessonByCourseId($courseId);

        return view('lesson.index', compact('lessons', 'lesson'));
    }
}
