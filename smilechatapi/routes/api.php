<?php

use App\Models\Post;
use App\Models\Friends;
use App\Models\Smile;
use App\Models\Chat;
use App\Models\Smiles_comment;
use App\Models\Comment;
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

route::get('/posts', function() {

    return Post::all();

});

route::get('/friends', function() {

    return Friends::all();

});

route::get('/smile', function() {

    return Smile::all();

});

route::get('/commnets', function() {

    return Comment::all();

});

route::get('/chat', function() {

    return Chat::all();

});

route::get('/smiles_comments', function() {

    return Smiles_comment::all();

});

Route::post('/post', function() {

    return Post::create([

        'user_id' => request(1),

        'post' => request('post'),

        'caption' => request('caption'),

    ]);
});

Route::friends('/friends', function() {

    return Friends::create([

        'user_id1' => request(1),

        'user_id2' => request(2),

    ]);
});

Route::smiles('/smiles', function() {

    return Smile::create([

        'user_id' => request(1),

        'post_id' => request(1),

        'smile' => request(TRUE),

    ]);
});

Route::comments('/comments', function() {

    return Comment::create([

        'user_id' => request(1),

        'post_id' => request(2),

        'comment' => request('Kvaliteta slike je top'),

    ]);
});

Route::chats('/chats', function() {

    return Chat::create([

        'user_id' => request(1),

        'friend_id' => request(1),

        'message' => request('ju3 biljard?'),

    ]);
});

Route::smiles_comments('/smiles_comments', function() {

    return Smiles_comment::create([

        'user_id' => request(1),

        'comment_id' => request(1),

        'smile' => request(TRUE),

    ]);
});
