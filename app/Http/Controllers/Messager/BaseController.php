<?php

namespace App\Http\Controllers\Messager;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function sendResponse($result, $message) {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message
        ];

        return response()->json($response, 200);
    }

    public function sendError($error, $errormessages = [], $code = 404) {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if (!empty($errormessages)) {
            $response['data'] = $errormessages;
        }

        return response()->json($response, $code);
    }
}
