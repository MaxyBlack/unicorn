<?php

namespace Unicorn\Services\Access\Traits;

/**
 * Class AuthenticatesAndRegistersUsers
 * @package Unicorn\Services\Access\Traits
 */
trait AuthenticatesAndRegistersUsers
{
    use AuthenticatesUsers, RegistersUsers {
        AuthenticatesUsers::redirectPath insteadof RegistersUsers;
    }
}