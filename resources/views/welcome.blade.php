<!DOCTYPE html>
<html lang="en" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" 
            content="width=devicewidth, user-scalable=no, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AI Poems</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="h-full grid place-item-center p-6">
        <div class="text-xs font-sans">
            {!! nl2br($poem) !!}
        </div>
    </body>