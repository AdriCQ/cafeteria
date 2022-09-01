<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use DefStudio\Telegraph\Models\TelegraphBot;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $bot = TelegraphBot::create([
            'token' => env('TELEGRAM_BOT_TOKEN', '5771381846:AAGP6UgaqoaxPBE8p6S1lq8pYhYIgijjAkA'),
            'name' => 'JaguaBIT',
        ]);
        // Unregister bot
        $bot->unregisterWebhook(true)->send();
        // register webhook
        $bot->registerWebhook()->send();

        // Chats
        // $bot->chats()->create([
        //     'chat_id' => '5248817823',
        //     'name' => 'Admin JaguaBIT',
        //     'user_id' => 1
        // ]);
    }
}
