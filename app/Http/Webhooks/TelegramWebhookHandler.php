<?php

namespace App\Http\Webhooks;

use DefStudio\Telegraph\Handlers\WebhookHandler;
use DefStudio\Telegraph\Keyboard\Keyboard;

/**
 * Telegram Webhook Handler
 */
class TelegramWebhookHandler extends WebhookHandler
{
    /**
     * app
     */
    public function app()
    {
        $APP_NAME = env('APP_NAME', 'Jagua-BIT');
        $APP_URL  = env('APP_URL', 'https://jagua-bit.servimav.com');

        $keyboard = Keyboard::make()
            ->button('Acceder')->webApp($APP_URL)
            ->button('Acceder en Navegador')->url($APP_URL)
            ->chunk(2);
        $message = 'Hola. Soy el Bot de ' . $APP_NAME . '. ¿Quieres acceder a nuestros servicios?';
        $this->chat->message($message)->keyboard($keyboard)->dispatch();
    }

    /**
     * comments
     */
    public function comments()
    {
        $APP_NAME = env('APP_NAME', 'Jagua-BIT');
        $APP_URL  = env('APP_URL', 'https://jagua-bit.servimav.com');

        $keyboard = Keyboard::make()
            ->button('Acceder')->webApp($APP_URL)
            ->button('Acceder en Navegador')->url($APP_URL)
            ->chunk(2);
        $message = 'Hola. Soy el Bot de ' . $APP_NAME . '. ¿Quieres acceder a nuestros servicios?';
        $this->chat->message($message)->keyboard($keyboard)->dispatch();
    }

    /**
     * events
     */
    public function events()
    {
        $APP_NAME = env('APP_NAME', 'Jagua-BIT');
        $APP_URL  = env('APP_URL', 'https://jagua-bit.servimav.com');

        $keyboard = Keyboard::make()
            ->button('Acceder')->webApp($APP_URL)
            ->button('Acceder en Navegador')->url($APP_URL)
            ->chunk(2);
        $message = 'Hola. Soy el Bot de ' . $APP_NAME . '. ¿Quieres acceder a nuestros servicios?';
        $this->chat->message($message)->keyboard($keyboard)->dispatch();
    }

    /**
     * help
     */
    public function help()
    {
        $APP_NAME = env('APP_NAME', 'Jagua-BIT');
        $APP_URL  = env('APP_URL', 'https://jagua-bit.servimav.com');

        $keyboard = Keyboard::make()
            ->button('Acceder')->webApp($APP_URL)
            ->button('Acceder en Navegador')->url($APP_URL)
            ->chunk(2);
        $message = 'Hola. Soy el Bot de ' . $APP_NAME . '. ¿Quieres acceder a nuestros servicios?';
        $this->chat->message($message)->keyboard($keyboard)->dispatch();
    }

    /**
     * news
     */
    public function news()
    {
        $APP_NAME = env('APP_NAME', 'Jagua-BIT');
        $APP_URL  = env('APP_URL', 'https://jagua-bit.servimav.com');

        $keyboard = Keyboard::make()
            ->button('Acceder')->webApp($APP_URL)
            ->button('Acceder en Navegador')->url($APP_URL)
            ->chunk(2);
        $message = 'Hola. Soy el Bot de ' . $APP_NAME . '. ¿Quieres acceder a nuestros servicios?';
        $this->chat->message($message)->keyboard($keyboard)->dispatch();
    }

    /**
     * offers
     */
    public function offers()
    {
        $APP_NAME = env('APP_NAME', 'Jagua-BIT');
        $APP_URL  = env('APP_URL', 'https://jagua-bit.servimav.com');

        $keyboard = Keyboard::make()
            ->button('Acceder')->webApp($APP_URL)
            ->button('Acceder en Navegador')->url($APP_URL)
            ->chunk(2);
        $message = 'Hola. Soy el Bot de ' . $APP_NAME . '. ¿Quieres acceder a nuestros servicios?';
        $this->chat->message($message)->keyboard($keyboard)->dispatch();
    }
    /**
     * start
     */
    public function start()
    {

        $APP_NAME = env('APP_NAME', 'Jagua-BIT');
        $APP_URL  = env('APP_URL', 'https://jagua-bit.servimav.com');

        $keyboard = Keyboard::make()
            ->button('Acceder')->webApp($APP_URL)
            ->button('Acceder en Navegador')->url($APP_URL)
            ->button('Ofertas')->action('offers')
            ->button('Noticias')->action('news')
            ->button('Eventos')->action('events')
            ->button('Opiniones')->action('comments')
            ->chunk(2);
        $message = 'Hola. Soy el Bot de ' . $APP_NAME . '. ¿Quieres acceder a nuestros servicios?';
        $this->chat->message($message)->keyboard($keyboard)->dispatch();
    }
}
