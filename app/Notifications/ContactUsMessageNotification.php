<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactUsMessageNotification extends Notification implements ShouldQueue
{
    use Queueable;
public $name;
public $email;
public $message;
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function via($notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('');
    }

    public function toDatabase($notifiable): array
    {
        return [];
    }

    public function toArray($notifiable): array
    {
        return [];
    }
}
