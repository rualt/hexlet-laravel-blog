@extends('layouts.app')

@section('content')
    <a href="{{ route('articles.create') }}"><h4>Добавить статью</h4></a>

    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2><a href="{{ route('articles.show', $article->id)}}">{{$article->name}}</a></h2>
        <div>{{Str::limit($article->body, 200)}}</div>
        <td><a href="{{route('articles.edit', $article->id)}}">Edit</td></br>
        <td><a href="{{route('articles.destroy', $article->id)}}" data-confirm="Вы уверены?" data-method="delete">Delete</td>
    @endforeach
@endsection