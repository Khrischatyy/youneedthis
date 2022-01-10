<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends BaseController
{
    public function index()
    {
        $posts = Post::all();
        return $this->sendResponse($posts->toArray(), 'Posts retrieved successfully');
    }
}
