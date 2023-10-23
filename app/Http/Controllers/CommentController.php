<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\DeleteCommentRequest;
use App\Services\CommentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * @var CommentService
     */
    protected $commentService;

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

    /**
     * @param DeleteCommentRequest $request
     * @param int $id
     *
     * @return RedirectResponse
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function destroy(DeleteCommentRequest $request, int $id): RedirectResponse
    {
        if ($this->commentService->delete($id, (int) auth()->id())) {
            session()->flash('message', __('messages.comment.success.delete'));
            return redirect()->back();
        }
        session()->flash('error', __('messages.comment.error.delete'));

        return redirect()->back();
    }
}
