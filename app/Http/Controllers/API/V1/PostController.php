<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Resources\PostResource;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends BaseController
{
    CONST TIME = 60 * 60 * 24;

    public function getPosts(Request $request): JsonResponse
    {
        $sortData = [
            'view' => 'view',
            'new' => 'created_at',
        ];

        $orderData = [
            'asc',
            'desc',
        ];

        $sortToApply = [
            'sort'  => $sortData['new'],
            'order' => $orderData[0],
        ];

        if(isset($sortData[$request->sort]) && in_array($request->order, $orderData)) {
            $sortToApply['sort'] = $sortData[$request->sort];
            $sortToApply['order'] = $request->order;
        }

        $posts = Cache::remember('posts', self::TIME, function () use ($sortToApply) {
            return Post::orderBy($sortToApply['sort'], $sortToApply['order'])->paginate(6);
        });

        return $this->sendResponse($posts, 'Posts retrieved successfully');
    }

    public function getPost($id): JsonResponse
    {
        $post = new PostResource(Post::findOrFail($id));
        return $this->sendResponse($post, 'Post retrieved successfully');
    }
}
