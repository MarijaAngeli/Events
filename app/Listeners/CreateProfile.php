<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Profile;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateProfile
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
        $profile = new Profile();

        $profile->city = 'Belgrade';
        $profile->about = 'Something About Me';

        $event->user->profile()->save($profile);
    }
}
