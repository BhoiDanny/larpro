<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;

class SermonUploadNotification extends Notification
{
    public string $name;
    public string $email;
    public function __construct( string $name, string $email )
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'title' => 'Sermon Uploads',
            'message' => $this->name . " just upload a Sermon with email: " . $this->email
        ];
    }

    public function toArray($notifiable)
    {
        return [];
    }
}
