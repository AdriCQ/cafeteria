<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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
        /**
         * -----------------------------------------
         *	Users
         * -----------------------------------------
         */
        User::query()->insert([
            [
                'name' => 'Developer AdriCQ',
                'email' => 'adriancapote95@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'role' => 'developer',
                'created_at' => now()
            ], [
                'name' => 'Developer DCQ',
                'email' => 'dariancapoteq@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'role' => 'developer',
                'created_at' => now()
            ],
        ]);
        /**
         * -----------------------------------------
         *	Telegram BOT
         * -----------------------------------------
         */

        $bot = TelegraphBot::create([
            'token' => env('TELEGRAM_BOT_TOKEN', '5771381846:AAGP6UgaqoaxPBE8p6S1lq8pYhYIgijjAkA'),
            'name' => 'JaguaBIT',
        ]);
        $bot->chats()->create([
            'chat_id' => env('TELEGRAM_ADMIN_CHAT'),
            'name' => 'Developer AdriCQ',
        ]);
        if (env('APP_ENV') === 'production') {
            // Unregister bot
            $bot->unregisterWebhook(true)->send();
            // register webhook
            $bot->registerWebhook()->send();
        }
    }
}
