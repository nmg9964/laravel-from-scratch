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

    public function show($articleId) {
        $article = Article::where('id', $articleId);
        return view('article', ['article' => $article]);
    }
}
