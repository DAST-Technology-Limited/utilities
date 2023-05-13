<?php

namespace App\Http\Controllers\ChatGPT;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;

class ChatGPTController extends Controller
{
    public $client;

    public function __construct()
    {
        $this->client = new OpenAi(env("OPENAI_API_KEY"));
    }
    public function chat(Request $request)
    {
        $request->validate([
            "question" => "required|string"  
        ]);

        $chat = $this->client->chat([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    "role" => "user",
                    "content" => $request->question
                ],
            ],
            'temperature' => 1.0,
            'max_tokens' => 4000,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,
         ]);

         $d = json_decode($chat);
         return ($d->choices[0]->message->content);
    }
}
