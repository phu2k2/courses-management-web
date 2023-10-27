<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTopicRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Services\CourseService;
use App\Services\TopicService;

class CourseController extends Controller
{
    /**
     * @var CourseService
     */
    protected $courseService;

    /**
     * @var TopicService
     */
    protected $topicService;

    public function __construct(CourseService $courseService, TopicService $topicService)
    {
        $this->courseService = $courseService;
        $this->topicService = $topicService;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $courses = $this->courseService->getInstructorCourses((int)auth()->id());
        return view('instructor.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {

        return view('instructor.course.create');
    }

    public function upload(): View
    {
        return view('instructor.course.upload');
    }

    public function store(): RedirectResponse
    {
        return redirect()->route('instructor.courses.upload');
    }

    public function showCurriculum(int $id): View
    {
        $course = $this->courseService->getCourse($id);

        return view('instructor.course.curriculum', compact('course'));
    }

    public function createTopic(int $id): View
    {
        return view('instructor.topic.create', compact('id'));
    }

    /**
     * Undocumented function
     *
     * @param StoreTopicRequest $request
     * @return RedirectResponse
     */
    public function storeTopic(StoreTopicRequest $request)
    {
        $courseId = $request->input('course_id');

        if ($this->topicService->create($request)) {
            session()->flash('message', __('messages.topic.success.create'));
            return redirect()->route('instructor.curriculum.show', compact('courseId'));
        }
        session()->flash('error', __('messages.topic.error.create'));

        return redirect()->back();
    }
}
