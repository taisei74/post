@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>blogname</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

       
    </head>
    <body>
    <h1>blogName</h1>
    <a href='/posts/{{ $post->id }}/edit'>edit</a>
    <div class='post'>
        <h2 class='title'>{{ $post->title }}</h2>
        <p class='body'>{{ $post->body }}</p>
    </div>
    <div>
    <a href='/categories/{{ $post->category->name }}'>{{ $post->category->name }}</a>
    </div>
    <a href='/'>back</a>
    </body>
</html>
@endsection
