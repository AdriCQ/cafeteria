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
        $APP_URL  = env('APP_URL', 'https://jagua-bit.servimav.com') . '/ui/#/';

        $keyboard = Keyboard::make()
            ->button('Acceder')->webApp($APP_URL)
            ->button('Acceder en Navegador')->url($APP_URL)
            ->chunk(2);
        $message = 'Hola. Soy el Bot de ' . $APP_NAME . '. ¿Como quieres acceder a nuestros servicios?';
        $this->chat->message($message)->keyboard($keyboard)->dispatch();
    }

    /**
     * comments
     */
    public function comments()
    {
        $APP_NAME = env('APP_NAME', 'Jagua-BIT');
        $APP_URL  = env('APP_URL', 'https://jagua-bit.servimav.com') . '/ui/#/';

        $keyboard = Keyboard::make()
            ->button('Acceder')->webApp($APP_URL)
            ->button('Acceder en Navegador')->url($APP_URL)
            ->chunk(2);
        $message = 'Hola. Soy el Bot de ' . $APP_NAME . '. Te muestro las últimas opiniones de nuestros clientes';
        $this->chat->message($message)->keyboard($keyboard)->dispatch();
    }

    /**
     * download
     */
    public function download()
    {
        $APP_NAME = env('APP_NAME', 'Jagua-BIT');
        $this->chat->message('<b>Aplicacion Android de ' . $APP_NAME . '</b>')
            ->document(public_path('Jagua-BIT.apk'))->send();
    }

    /**
     * events
     */
    public function events()
    {
        $APP_NAME = env('APP_NAME', 'Jagua-BIT');
        $APP_URL  = env('APP_URL', 'https://jagua-bit.servimav.com') . '/ui/#/';

        $keyboard = Keyboard::make()
            ->button('Acceder')->webApp($APP_URL)
            ->button('Acceder en Navegador')->url($APP_URL)
            ->chunk(2);
        $message = 'Hola. Soy el Bot de ' . $APP_NAME . '. Tenemos un grupo de eventos que no te debes perder.';
        $this->chat->message($message)->keyboard($keyboard)->dispatch();
    }

    /**
     * help
     */
    public function help()
    {
        $APP_NAME = env('APP_NAME', 'Jagua-BIT');
        $APP_URL  = env('APP_URL', 'https://jagua-bit.servimav.com') . '/ui/#/';

        $keyboard = Keyboard::make()
            ->button('Acceder')->webApp($APP_URL)
            ->button('Acceder en Navegador')->url($APP_URL)
            ->chunk(2);
        $message = 'Hola. Soy el Bot de ' . $APP_NAME . '. ¿Cómo Puedo ayudarte?';
        $this->chat->message($message)->keyboard($keyboard)->dispatch();
    }

    /**
     * news
     */
    public function news()
    {
        $APP_NAME = env('APP_NAME', 'Jagua-BIT');
        $APP_URL  = env('APP_URL', 'https://jagua-bit.servimav.com') . '/ui/#/';

        $keyboard = Keyboard::make()
            ->button('Acceder')->webApp($APP_URL)
            ->button('Acceder en Navegador')->url($APP_URL)
            ->chunk(2);
        $message = 'Hola. Soy el Bot de ' . $APP_NAME . '. Te muestro lo último en noticias';
        $this->chat->message($message)->keyboard($keyboard)->dispatch();
    }

    /**
     * offers
     */
    public function offers()
    {
        $APP_NAME = env('APP_NAME', 'Jagua-BIT');
        $APP_URL  = env('APP_URL', 'https://jagua-bit.servimav.com') . '/ui/#/';

        $keyboard = Keyboard::make()
            ->button('Acceder')->webApp($APP_URL)
            ->button('Acceder en Navegador')->url($APP_URL)
            ->chunk(2);
        $message = 'Hola. Soy el Bot de ' . $APP_NAME . '. Revisa nuestras ofertas y seguramente encontrarás algo a tu gusto';
        $this->chat->message($message)->keyboard($keyboard)->dispatch();
    }
    /**
     * start
     */
    public function start()
    {

        $APP_NAME = env('APP_NAME', 'Jagua-BIT');
        $APP_URL  = env('APP_URL', 'https://jagua-bit.servimav.com') . '/ui/#/';

        $keyboard = Keyboard::make()
            ->button('Acceder')->webApp($APP_URL)
            ->button('Acceder en Navegador')->url($APP_URL)
            ->button('APK Android')->action('download')
            ->button('Ofertas')->action('offers')
            ->button('Noticias')->action('news')
            ->button('Eventos')->action('events')
            ->button('Opiniones')->action('comments')
            ->chunk(2);
        $message = 'Hola. Soy el Bot de ' . $APP_NAME . '. Yo te puedo ayudar a encontrar las <b>Ofertas, Noticias y Eventos</b> de ' . $APP_NAME . '. También puedes revisar las <b>Opiniones</b> de nuestros Clientes';
        $this->chat->message($message)->keyboard($keyboard)->dispatch();
    }
}
