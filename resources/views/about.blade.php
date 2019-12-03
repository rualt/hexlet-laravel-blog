@extends('layouts.app')

@section('title', 'About')
    
@section('content')

<h1>О блоге</h1>
<p>Laravel experiments. <a href="https://ru.hexlet.io/courses/php-laravel" target="_blank">Hexlet Laravel online course.</a></p>
<h3>Our stuff:</h3>
@foreach ($team as $user)
    <table  border="1">
        <tr>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['position'] }}</td>
        </tr>
    </table>
@endforeach

@endsection