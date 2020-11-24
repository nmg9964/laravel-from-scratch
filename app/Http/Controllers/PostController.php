<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller {
    public function show($title) {
        $post = \DB::table('posts')->where('title', $title)->first();

        return view('test', ['post' => $post]);
    }
}
