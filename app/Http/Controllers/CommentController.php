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
     * @param DeleteCommentRequest $commentRequest
     * @param int $id
     *
     * @return RedirectResponse
     */
    public function destroy(DeleteCommentRequest $commentRequest, int $id): RedirectResponse
    {
        $comment = $this->commentService->getComment($id);
        if ($comment) {
            if ($this->commentService->delete($id)) {
                session()->flash('message', __('messages.comment.success'));
            } else {
                session()->flash('error', __('messages.comment.error'));
            }
        }

        return redirect()->back();
    }
}
