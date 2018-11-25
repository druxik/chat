<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendChatMessage extends Command
{
    protected $signature = 'chat:message {message}';

    protected $description = 'Send chat message.';

    public function handle()
    {
        // Вызов события, пока просто выбирая первого пользователя
        $user = \App\User::first();
        $message = \App\Message::create([
            'user_id' => $user->id,
            'message' => $this->argument('message')
        ]);

        event(new \App\Events\MessagePosted($message, $user));
    }
}