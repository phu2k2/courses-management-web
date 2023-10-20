<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Services\CommentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * @var CommentService
     */
    private $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    /**
     * @param StoreCommentRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StoreCommentRequest $request): RedirectResponse
    {
        session()->flash('error', __('messages.user.error.create_comment'));
        if ($this->commentService->create($request->validated(), (int)auth()->id())) {
            session()->forget('error');
            session()->flash('message', __('messages.user.success.create_comment'));
        }

        return redirect()->back();
    }
}
