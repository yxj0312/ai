<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $messages = [
                    [
                        "role"    => "system",
                        "content" => "You are a poetic assistant, skilled in explaining complex programming concepts with creative flair."
                    ],
                    [
                        "role"    => "user",
                        "content" => "Compose a poem that explains the concept of recursion in programming."
                    ]
                ];
    $poem = Http::withToken(config('services.openai.key'))
    ->post('https://api.openai.com/v1/chat/completions',
            [
                "model"    => "gpt-3.5-turbo",
                "messages" => $messages,
            ])->json('choices.0.message.content');
            
            if ($poem == null) {
                $poem = "I'm sorry, I don't know how to answer that. Please try again.";    
            }

            $messages[] = [
                "role"    => "assistant",
                "content" => $poem
            ];
            $messages[] = [
                "role"    => "user",
                "content" => "Good, but can you make it much, much more silly?"
            ];


            $sillyPoem = Http::withToken(config('services.openai.key'))
    ->post('https://api.openai.com/v1/chat/completions',
            [
                "model"    => "gpt-3.5-turbo",
                "messages" => $messages,
            ])->json('choices.0.message.content');

             $messages[] = [
                "role"    => "assistant",
                "content" => $sillyPoem
            ];

    return view('welcome', [
        'poem' => $poem
    ]);

    
});
