<?php

namespace App\Http\Controllers;

use App\Article;

class ArticleController extends Controller
{
    public function index()
    {   
        $articles = Article::paginate();
        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

}   