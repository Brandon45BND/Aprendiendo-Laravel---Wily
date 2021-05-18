<?php

namespace App\Listeners;

use App\Events\UserHasContacted;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMailable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmail
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
     * @param  UserHasContacted  $event
     * @return void
     */
    public function handle(UserHasContacted $event)
    {
        $correo = new ContactoMailable;

        Mail::to('neko45slayer@gmail.com')->send($correo);
    }
}
