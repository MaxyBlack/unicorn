<?php

namespace Unicorn\Services\Vue;


use Illuminate\Auth\AuthManager;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Application;

/**
 * Class Unicorn
 * @package Unicorn\Services\Vue
 */
class Unicorn
{
    /**
     * @var Application
     */
    private $app;

    /**
     * @var Guard
     */
    private $auth;

    /**
     * Unicorn constructor.
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->auth = $app->make('auth');
    }

    /**
     * @return array
     */
    public function initialize()
    {
        return [
            'user' => $this->auth->check() ?: $this->auth->user(),
        ];
    }
}