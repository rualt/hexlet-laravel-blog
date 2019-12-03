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

$team = [
    ['name' => 'Luke Skywalker', 'position' => "CEO's son"],
    ['name' => 'C-3PO', 'position' => 'protocol droid'],
    ['name' => 'R2-D2', 'position' => 'astromech droid'],
    ['name' => 'Darth Vader', 'position' => 'CEO']
];

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function () {
    return view('contacts');
});


Route::get('/about', function () use ($team) {
    return view('about', ['team' => $team]);
});