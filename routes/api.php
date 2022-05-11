<?php

use App\Http\Controllers\API\V1\CategoryController;
use App\Http\Controllers\API\V1\CommentController;
use App\Http\Controllers\API\V1\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('posts', [PostController::class, 'getPosts']);
Route::get('post/{id}', [PostController::class, 'getPost']);
Route::get('categories', [CategoryController::class, 'getCategories']);

Route::middleware('auth:api')->group(function() {
    Route::post('comment/add', [CommentController::class, 'addComment']);
    Route::post('comment/reply', [CommentController::class, 'replyToComment']);
});
