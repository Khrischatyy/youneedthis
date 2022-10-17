<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DenisController extends Controller
{
    const news = [

    ];

    public function getPosts(Request $request)
    {
        return json_encode([
            '1' => '1',
            '2' => '',
        ]);
    }

    public function getPost($id)
    {
        return json_encode([
            '1' => '1',
            '2' => '',
        ]);
    }
}
