<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DenisController extends Controller
{
    const news = [
        [
            'name' => ''
        ]
//        name: 'stringWords',
//      date: 'date',
//      raiting: 'numberInt|1,10',
//      authorName: 'nameFirst',
//      body: 'stringLong',
    ];

    public function getPosts(Request $request)
    {
        return collect([
            '1' =>  fake()->name(),
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
