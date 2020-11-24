<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{post}', function($post) {
    $posts = ['first-post' => 'This is my first post']; // db simulation

    if (!array_key_exists($post, $posts)) {
        abort(404, 'POST NOT FOUND');
    };
    return view('test', ['post' => $posts[$post]]);
});
