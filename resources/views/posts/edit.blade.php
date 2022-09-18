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
    <h1>blog edit</h1>
        <form action='/posts/{{ $post->id }}' method='POST'>
            @csrf
            @method('PUT')
            <div class='post_edit'>
            <h2>title edit</h2>
            <input type='text' name='post[title]' value='{{ $post->title }}'/>
             <h2>body edit</h2>
                <input type='text' name='post[body]' value='{{ $post->body }}'/>
                <div class='save'>
                <input type='submit' value='保存'/>
                </div>
             </div>
        </form>
      <a href='/'>back</a>
    </body>
</html>
