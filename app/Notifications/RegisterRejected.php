<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegisterRejected extends Notification
{
    use Queueable;
    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Su solicitud de registro ha sido rechazada por un administrador.')
            ->line('Disculpe las molestias.')
            ->line('Puedes volver a registrarte en:')
            ->action('Registrarse', route('register'))
            ->line('Gracias!');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
