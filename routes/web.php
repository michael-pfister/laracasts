<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return view('posts', ['posts' => Post::all()]);
});

/* Route::get('/{number}', function ($slug) {
    return view('number', [
        'number' => $slug
    ]);
})->where('number', '[0-9]+'); */

Route::get('{post:slug}', function (Post $post) { // Route Model Binding, Post::where('slug', $post)->firstOrFail()
    if (!$post) {
        throw new ModelNotFoundException();
    }

    return view('post', ['post' => $post]);
})/* ->where('post', '[A-z\-]+') */; // not needed anymore
