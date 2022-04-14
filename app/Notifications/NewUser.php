<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUser extends Notification
{
    use Queueable;

    public function __construct(User $new_user)
    {
        $this->new_user = $new_user;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('New user has registered with email ' . $this->new_user->email)
            ->action('Approve user', route('admin.users.approve', $this->new_user->id));
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
