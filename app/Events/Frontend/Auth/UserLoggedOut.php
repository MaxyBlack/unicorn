<?php

namespace Unicorn\Events\Frontend\Auth;

use Unicorn\Events\Event;
use Illuminate\Queue\SerializesModels;

/**
 * Class UserLoggedOut
 * @package Unicorn\Events\Frontend\Auth
 */
class UserLoggedOut extends Event
{
    use SerializesModels;

    /**
     * @var $user
     */
    public $user;

    /**
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }
}