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
use App\Http\Controllers\LoginController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//   return $request->user();
//});

Route::apiResource('chats', ChatController::class);
Route::apiResource('comments', CommentController::class);
Route::apiResource('friends', FriendsController::class);
Route::apiResource('posts', PostController::class);
Route::apiResource('smiles', SmileController::class);
Route::apiResource('smiles-comments', SmileCommentController::class);
Route::apiResource('users', UserController::class);

//users
Route::prefix('/users')->group( function() {
    Route::post('/login', [LoginController::class, 'login']);
    Route::middleware('auth:api')->get('/all', [Usercontroller::class, 'index']);
});
