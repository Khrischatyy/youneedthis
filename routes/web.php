<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Blog\CategoryController;
use App\Http\Controllers\Blog\CommentController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\ChooseApplication;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ChooseApplication::class, 'index'])->name('home');

Route::get('posts', [PostController::class, 'getPosts'])->name('posts');
Route::get('categories', [CategoryController::class, 'getCategories'])->name('categories');
Route::get('post/{id}', [PostController::class, 'getPost'])->name('post');
Route::get('search/{query}', [PostController::class, 'search']);

Route::get('/create/noname', [AuthController::class, 'createNoname']); //TODO добавить гуард guest

Route::middleware('auth:api')->group(function() {
    Route::post('comment/add', [CommentController::class, 'addComment']);
    Route::post('comment/reply', [CommentController::class, 'replyToComment']);
});
