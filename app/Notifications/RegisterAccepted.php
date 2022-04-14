<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegisterAccepted extends Notification
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
            ->line('Su solicitud de registro ha sido aprobada por un Administrador!')
            ->line('Ya puedes acceder a su cuenta:')
            ->action('Acceder', route('dashboard'))
            ->line('Gracias!');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
