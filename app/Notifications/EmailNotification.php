<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $name = '';
    public $emailCheck = '';

    public function __construct($name,$emailCheck)
    {
        $this->name       = $name;
        $this->emailCheck = $emailCheck;
    }


    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
//        return (new MailMessage)
//                    ->line('Mithu Hasan')
//                    ->line('The introduction to the notification.')
//                    ->action('Notification Action', url('/'))
//                    ->line('Thank you for using our application!');

        $name       = $this->name;
        $emailCheck = $this->emailCheck;

        return (new MailMessage)->view('email',compact('name', 'emailCheck'));
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
