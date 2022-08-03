<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPosts(Request $request)
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

        $category = (string) $request->category;

        if(isset($sortData[$request->sort]) && in_array($request->order, $orderData)) {
            $sortToApply['sort'] = $sortData[$request->sort];
            $sortToApply['order'] = $request->order;
        }

        $posts = Post::where('slug', $category)->orderBy($sortToApply['sort'], $sortToApply['order'])->paginate(6);

        return view('blog.parts.posts', ['posts' => $posts]);
    }

    public function getPost($id)
    {
        $post = Post::findOrFail($id);

        return view('blog.parts.post', ['post' => $post]);
    }

    public function search(string $search)
    {
        return Post::select('id', 'title')->where('title', 'like', '%' . $search .'%')->get();
    }
}
