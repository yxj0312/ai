<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Lista de posts</h1>
                    <ul>
                        @foreach ($posts as $post)
                            <li>
                                <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                                    {{ $post->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </body>