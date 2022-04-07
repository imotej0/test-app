<?php


use App\Models\Post;
use App\Models\Friends;
use App\Models\Smile;
use App\Models\Chat;
use App\Models\Smiles_comment;
use App\Models\Comment;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SmileController;
use App\Http\Controllers\SmileCommentController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/chats', [ChatController::class, 'index']);

Route::get('/comments', [CommentController::class, 'index']);

Route::get('/friends', [FriendsController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/smiles', [SmileController::class, 'index']);

Route::get('/smiles-comments', [SmileCommentController::class, 'index']);



Route::get('/chats/{id}', [ChatController::class, 'show']);

Route::get('/comments/{id}', [CommentController::class, 'show']);

Route::get('/friends/{id}', [FriendsController::class, 'show']);

Route::get('/posts/{id}', [PostsController::class, 'show']);

Route::get('/smiles/{id}', [SmileController::class, 'show']);

Route::get('/smiles-comments/{id}', [SmileCommentController::class, 'show']);