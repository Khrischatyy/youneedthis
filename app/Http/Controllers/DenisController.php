<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DenisController extends Controller
{
    const news = [

    ];

    public function getPosts(Request $request)
    {
        return collect([
            '1' => '1',
            '2' => '3',
        ])->toJson();
    }

//    public function getPost($id)
//    {
//        return json_encode([
//            '1' => '1',
//            '2' => '',
//        ]);
//    }
}
