<?php

namespace App\Listeners;

use Auth;
use Mail;
use App\Events\UserRegistered;
use App\Mail\NewUserWelcome;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendActivationCode implements ShouldQueue
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
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
       // \Log::info('activation', ['user' => $event->user]);
        Mail::to($event->user->email)->send(new NewUserWelcome($event->user));
    }
}
