<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteCommentRequest;
use App\Services\CommentService;
use Illuminate\Http\RedirectResponse;

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
     * @param DeleteCommentRequest $request
     * @param int $id
     *
     * @return RedirectResponse
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function destroy(DeleteCommentRequest $request, int $id): RedirectResponse
    {
        $commentId = $id;
        if ($this->commentService->delete($commentId, (int) auth()->id())) {
            session()->flash('message', __('messages.comment.success.delete'));
            return redirect()->back();
        }
        session()->flash('error', __('messages.comment.error.delete'));

        return redirect()->back();
    }
}
