<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SermonUploadNotification;
use Illuminate\Notifications\Notification;

class ChurchController extends Controller
{
    public function churchVibe($name = '', $email = '')
    {
       $user = User::findOrFail(auth()->user()->id);

       $user->notify(new SermonUploadNotification($name, $email));



        return [
            'name' => $name,
            'email' => $email,
            'user' => $user
        ];
    }
}
