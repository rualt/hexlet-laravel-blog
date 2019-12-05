<?php

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

// controllerName@methodName
Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');

Route::get('/articles', 'ArticleController@articles');


/* $team = [
    ['name' => 'Luke Skywalker', 'position' => "CEO's son"],
    ['name' => 'C-3PO', 'position' => 'protocol droid'],
    ['name' => 'R2-D2', 'position' => 'astromech droid'],
    ['name' => 'Darth Vader', 'position' => 'CEO']
];

$articles = \App\Article::all();

Route::get('/articles', function () use ($articles) {
    return view('articles', compact('articles'));
});


Route::get('/about', function () use ($team) {
    return view('about', compact('team'));
}); */