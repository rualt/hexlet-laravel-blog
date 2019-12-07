@extends('layouts.app')

@section('content')
    <a href="{{ route('articles.create') }}"><h4>Добавить статью</h4></a>

    <h1>Список статей</h1>
    @foreach ($articles as $article)
        </br>{{$article->id}}</td>
        <a href="{{route('articles.show', $article->id)}}">{{$article->name}}</a></td></br>
        <div>{{Str::limit($article->body, 100)}}</div></br>
        <a href="{{route('articles.edit', $article->id)}}">Edit</a>
        <a href="{{route('articles.destroy', $article->id)}}" data-confirm="Вы уверены?" data-method="delete">Delete</a>
        </br>
    @endforeach
@endsection