@extends('layouts.app')

@section('content')
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
    <a href="{{ route('articles.edit', $article->id)}}">Редактировать</a>
    <a href="{{route('articles.destroy', $article->id)}}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a>
    <input type="submit" value="Сохранить" data-disable-with="Сохраняем">
@endsection

