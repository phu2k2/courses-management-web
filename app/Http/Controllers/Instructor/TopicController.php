<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTopicRequest;
use App\Services\TopicService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TopicController extends Controller
{
    /**
     * @var TopicService;
     */
    protected $topicService;

    public function __construct(TopicService $topicService)
    {
        $this->topicService = $topicService;
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
