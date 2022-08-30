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

    /**
     * help
     */
    public function help()
    {

        $APP_URL = env('APP_NAME', 'Jagua-BIT');
        $APP_NAME  = env('APP_URL', 'https://jaguabit.servimav.com');

        $this->chat->message('Para aclarar sus dudas y aprender utilizar ' . $APP_NAME . ' visite nuestro <b>Centro de Ayuda</b>')->keyboard(
            Keyboard::make()
                ->button('En Telegram')->webApp($APP_URL)
                ->button('En Navegador')->url($APP_URL)
                ->chunk(2)
        )->dispatch();
    }
    /**
     * open_app
     */
    public function open_app()
    {

        $APP_URL = env('APP_NAME', 'Jagua-BIT');
        $APP_NAME  = env('APP_URL', 'https://jaguabit.servimav.com');

        $this->chat->message('¿Como desea <b>acceder</b> a ?')->keyboard(
            Keyboard::make()
                ->button('En Telegram')->webApp($APP_URL)
                ->button('En Navegador')->url($APP_URL)
                ->chunk(2)
        )->dispatch();
    }
    /**
     * start
     */
    public function start()
    {

        $APP_URL = env('APP_NAME', 'Jagua-BIT');
        $APP_NAME  = env('APP_URL', 'https://jaguabit.servimav.com');

        $keyboard = Keyboard::make()
            ->button('Acceder')->webApp($APP_URL)
            ->button('Acceder en Navegador')->url($APP_URL)
            ->chunk(2);
        $message = 'Hola. Soy el Bot de ' . $APP_NAME . '. ¿Quieres acceder a nuestros servicios?';
        $this->chat->message($message)->keyboard($keyboard)->dispatch();
    }
}
