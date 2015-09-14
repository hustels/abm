<?php

namespace App\Listeners;

use App\Events\UserHasRegistred;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserHasRegistred  $event
     * @return void
     */
    public function welcome(UserHasRegistred $event)
    {
        var_dump('El usuario ' . $event->name . ' ha registrado');
    }
}
