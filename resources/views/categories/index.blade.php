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
        <h1>Blog Name</h1>
     
       <div> <a href='/posts/create'>create</a></div>
        @foreach($posts as $post)
             <form action='/posts/{{ $post->id }}' method='Post' id='form_{{ $post->id }}' style='display:inline'>
            @csrf
            @method('DELETE')
          
        <div class='posts'>
            <div class='post'>
            <a href='/posts/{{ $post->id }}'><h2>{{ $post->title }}</h2></a>
            <p>{{ $post->body }}<p>
        </div>
          <button type='submit'>delete</button>
        </form>
        <div>
            <a href=''>{{ $post->category->name }}</a>
        </div>
    </div>
    @endforeach
    <div class='paginate'>
    {{ $posts->links() }}
    </div>
    </body>
</html>
