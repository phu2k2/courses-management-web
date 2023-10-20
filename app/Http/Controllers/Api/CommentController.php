<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCommentRequest;
use App\Services\CommentService;
use Illuminate\Http\JsonResponse;

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
        if ($this->commentService->update($commentId, (int)  $request->user_id, $request->content)) {
            return response()->json(['message' => 'Update comment was successful'], 200);
        }

        return response()->json(['message' => 'Update comment was failed'], 500);
    }
}
