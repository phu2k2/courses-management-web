<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Services\ReviewService;
use Illuminate\Http\RedirectResponse;

class ReviewController extends Controller
{
    /**
     * @var ReviewService
     */
    private $reviewService;

    public function __construct(ReviewService $reviewService)
    {
        $this->reviewService = $reviewService;
    }

    /**
     * Store a newly created resource in storage.
     * @return RedirectResponse
     */
    public function store(StoreReviewRequest $request): RedirectResponse
    {
        $data = array_merge(
            [
                'user_id' => auth()->id(),
                'course_id' => $request->input('course_id')
            ],
            $request->validated()
        );

        session()->flash('message', __('messages.user.success.create_review'));
        if (!$this->reviewService->addReview($data)) {
            session()->forget('message');
            session()->flash('error', __('messages.user.error.create_review'));
        }

        return redirect()->back();
    }
}
