<?php

namespace App\Http\Webhooks;

use DefStudio\Telegraph\Handlers\WebhookHandler;
use DefStudio\Telegraph\Keyboard\Keyboard;
use DefStudio\Telegraph\Models\TelegraphChat;

/**
 * Telegram Webhook Handler
 */
class TelegramWebhookHandler extends WebhookHandler
{
    private string $APP_URL;
    private string $APP_NAME;

    public function __construct()
    {
        $this->APP_NAME = env('APP_NAME', 'Jagua-BIT');
        $this->APP_URL = env('APP_URL', 'https://jaguabit.servimav.com');
    }

    /**
     * help
     */
    public function help()
    {

        $this->chat->message('Para aclarar sus dudas y aprender utilizar ' . $this->APP_NAME . ' visite nuestro <b>Centro de Ayuda</b>')->keyboard(
            Keyboard::make()
                ->button('En Telegram')->webApp($this->APP_URL)
                ->button('En Navegador')->url($this->APP_URL)
                ->chunk(2)
        )->dispatch();
    }
    /**
     * open_app
     */
    public function open_app()
    {
        $this->chat->message('¿Como desea <b>acceder</b> a ?')->keyboard(
            Keyboard::make()
                ->button('En Telegram')->webApp($this->APP_URL)
                ->button('En Navegador')->url($this->APP_URL)
                ->chunk(2)
        )->dispatch();
    }
    /**
     * start
     */
    public function start()
    {
        $chat = TelegraphChat::query()->where(['chat_id' => $this->chat->chat_id])->first();
        // User exists
        if ($chat) {
            $keyboard = Keyboard::make()
                ->button('Acceder')->webApp($this->APP_URL)
                ->button('Acceder en Navegador')->url($this->APP_URL)
                ->chunk(2);
            $message = 'Hola. Soy el Bot de ' . $this->APP_NAME . '. ¿Quieres acceder a nuestros servicios?';
            $this->chat->message($message)->keyboard($keyboard)->dispatch();
        }
    }
}
