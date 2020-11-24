<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller {
    public function show($post) {
        $posts = ['first-post' => 'This is my first post']; // db simulation

        if (!array_key_exists($post, $posts)) {
            abort(404, 'POST NOT FOUND');
        }

        return view('test', ['post' => $posts[$post]]);
    }
}
