<?php

namespace App\Http\Controllers;

use App\Services\CourseService;
use App\Services\LessonService;
use App\Services\TopicService;
use Illuminate\Contracts\View\View;

class LessonController extends Controller
{
    /**
     * @var LessonService
     */
    protected $lessonService;

    /**
     * @var CourseService
     */
    protected $courseService;

    /**
     * @var TopicService
     */
    protected $topicService;

    public function __construct(LessonService $lessonService, CourseService $courseService, TopicService $topicService)
    {
        $this->lessonService = $lessonService;
        $this->courseService = $courseService;
        $this->topicService = $topicService;
    }

    /**
     * @param int $courseId
     * @param int $lessonId
     * @return View
     */
    public function show(int $courseId, int $lessonId): View
    {
        $course = $this->courseService->findCourse($courseId);
        $lesson = $this->lessonService->findLesson($lessonId);
        $topics = $this->topicService->getTopicsWithLessons($courseId);

        return view('lesson.index', compact('course', 'lesson', 'topics'));
    }
}
