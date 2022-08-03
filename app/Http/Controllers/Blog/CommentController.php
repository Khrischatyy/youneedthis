<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\ReplyToComment;

class CommentController extends Controller
{
    public function addComment(CommentRequest $request, Comment $comment)
    {

    }

    public function replyToComment(CommentRequest $request, ReplyToComment $replyToComment)
    {

    }
}
