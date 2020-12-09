<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::get();
        return view('articles', ['articles' => $articles]);
    }

    public function show($id) {
        $article = Article::where('id', $id)->firstOrFail();
        return view('article', ['article' => $article]);
    }
}
