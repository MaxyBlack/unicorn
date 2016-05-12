<?php

namespace Unicorn\Services\Access\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Access
 * @package Unicorn\Services\Access\Facades
 */
class Access extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'access';
    }
}