<?php

namespace Unicorn\Listeners\Frontend\Auth;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Unicorn\Events\Frontend\Auth\UserRegistered;

/**
 * Class UserRegisteredListener
 * @package Unicorn\Listeners\Frontend\Auth
 */
class UserRegisteredListener implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event handler.
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
     * @param  UserRegistered $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        \Log::info('User Registered: ' . $event->user->name);
    }
}
