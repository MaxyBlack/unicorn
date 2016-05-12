<?php

namespace Unicorn\Http\Controllers\Frontend\Auth;

use Unicorn\Http\Controllers\Controller;
use Unicorn\Services\Access\Traits\ChangePasswords;
use Unicorn\Services\Access\Traits\ResetsPasswords;
use Unicorn\Repositories\Frontend\Access\User\UserRepositoryContract;

/**
 * Class PasswordController
 * @package Unicorn\Http\Controllers\Frontend\Auth
 */
class PasswordController extends Controller
{

    use ChangePasswords, ResetsPasswords;

    /**
     * Where to redirect the user after their password has been successfully reset
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * @param UserRepositoryContract $user
     */
    public function __construct(UserRepositoryContract $user)
    {
        $this->user = $user;
    }
}