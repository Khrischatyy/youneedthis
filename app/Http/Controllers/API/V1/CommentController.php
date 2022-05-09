<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\ReplyToComment;
use Illuminate\Http\Request;

class CommentController extends BaseController
{
    public function addComment(CommentRequest $request, Comment $comment)
    {

    }

    public function replyToComment(CommentRequest $request, ReplyToComment $replyToComment)
    {

    }
}
