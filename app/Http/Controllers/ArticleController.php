<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function articles()
    {   
        $articles = \App\Article::all();
        return view('page.articles', compact('articles'));
    }
}