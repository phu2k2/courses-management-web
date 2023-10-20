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
        session()->flash('message', __('messages.user.success.create_review'));
        if (!$this->reviewService->addReview($request)) {
            session()->forget('message');
            session()->flash('error', __('messages.user.error.create_review'));
        }

        return redirect()->back();
    }
}
