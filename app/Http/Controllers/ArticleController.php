<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {   
        $articles = Article::paginate();
        return view('article.index', compact('articles'));
    }

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $this->validate($request, [
            // У обновления немного изменённая валидация. 
            // В проверку уникальности добавляется название поля и id текущего объекта
            // Если этого не сделать, Laravel будет ругаться на то что имя уже существует
            'name' => 'required|unique:articles,name,' . $article->id,
            'body' => 'required|min:100',
        ]);

        $article->fill($request->all());
        $article->save();
        return redirect()
            ->route('articles.index');
    }

    // Здесь нам понадобится объект запроса для извлечения данных
    public function store(Request $request)
    {
        // Проверка введённых данных
        // Если будут ошибки, то возникнет исключение
        $this->validate($request, [
            'name' => 'required|unique:articles',
            'body' => 'required|min:1000',
        ]);

        $article = new Article();
        // Заполнение статьи данными из формы
        $article->fill($request->all());
        // При ошибках сохранения возникнет исключение
        $article->save();

        // Редирект на указанный маршрут с добавлением флеш-сообщения
        return redirect()
            ->route('articles.index')
            ->with('success', 'Article created successfully');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        if ($article) {
        $article->delete();
        }
        return redirect()->route('articles.index');
    }

}   