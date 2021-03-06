<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;

class ArticleController extends Controller
{
    public function index()
    {
        (request('tag')) ? $articles = Tag::where('name', request('tag'))->firstOrFail()->articles
        : $articles = Article::take(4)->latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create', ['tags' => Tag::all()]);
    }

    public function store()
    {
        $article = new Article(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));

        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article)
    {
        $article->update(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));

        return redirect('/articles/' . $article->id);
    }

    public function destroy($id)
    {
        Article::destroy($id);
        return redirect('/articles');
    }
}
