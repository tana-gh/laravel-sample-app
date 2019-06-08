<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $req)
    {
        $article = new Article();
        $article->title = $req->title;
        $article->body  = $req->body;
        $article->save();

        return view('article.store');
    }

    public function edit(Request $req, int $id)
    {
        $article = Article::find($id);
        return view('article.edit', ['article' => $article]);
    }

    public function update(Request $req)
    {
        $article = Article::find($req->id);
        $article->title = $req->title;
        $article->body  = $req->body;
        $article->save();

        return view('article.update');
    }

    public function delete(Request $req)
    {
        Article::destroy($req->id);
        return view('article.delete');
    }
}
