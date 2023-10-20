<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Services\CommentService;
use Illuminate\Http\JsonResponse;
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
     * @param UpdateCommentRequest $request
     * @param int $commentId
     *
     * @return JsonResponse
     */
    public function update(UpdateCommentRequest $request, int $commentId)
    {
        $result = ['error', 'Update comment was failed'];
        if ($this->commentService->update($commentId, (int) auth()->id(), $request->content)) {
            $result = ['success', 'Update comment was successful'];
        }
        return response()->json($result);
    }

    /**
     * @param DeleteCommentRequest $request
     *
     * @return RedirectResponse
     */
    public function destroy(DeleteCommentRequest $request): RedirectResponse
    {
        $commentId = $request->id;
        if ($this->commentService->delete($commentId, (int) auth()->id())) {
            session()->flash('message', __('messages.comment.success.delete'));
            return redirect()->back();
        }
        session()->flash('error', __('messages.comment.error.delete'));

        return redirect()->back();
    }
}
