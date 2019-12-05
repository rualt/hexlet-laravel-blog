@extends('layouts.app')

@section('title', 'Articles')

@section('header', 'Articles')

@section('content')

<h3>Test of displaying of articles:</h3>

@foreach ($articles as $article)
    <table  border="1">
        <tr>
            <td>{{ $article->name }}</td>
            <td>{{ $article->body }}</td>
        </tr>
    </table>
@endforeach

@endsection