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

Route::get('/posts/{post}', 'App\Http\Controllers\PostController@show');

Route::get('/home', function() {
    return view('home');
});

// RESTful routes for ArticleController
Route::get('/articles', 'App\Http\Controllers\ArticleController@index');
Route::get('/articles/{id}', 'App\Http\Controllers\ArticleController@show');
Route::get('/articles/create', 'App\Http\Controllers\ArticleController@create');
Route::post('/articles', 'App\Http\Controllers\ArticleController@store');
Route::get('/articles/{id}/edit', 'App\Http\Controllers\ArticleController@edit');
Route::put('articles/{id}', 'App\Http\Controllers\ArticleController@update');
Route::delete('articles', 'App\Http\Controllers\ArticleController@destroy');
