<?php

namespace App\Observers;

use App\Models\User;
use App\Notifications\RegisterAccepted;

class UserObserver
{
    public function updated(User $user)
    {
        $accepted = User::where('aproved_at', !'empty');
        if ($accepted) {
            $user->notify(new RegisterAccepted());
        }
    }
}
