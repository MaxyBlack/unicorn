<?php

namespace Unicorn\Http\Controllers\Frontend\User;

use Unicorn\Http\Requests;
use Unicorn\Http\Controllers\Controller;

/**
 * Class DashboardController
 * @package Unicorn\Http\Controllers\Frontend
 */
class DashboardController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.user.dashboard')
            ->withUser(access()->user());
    }
}
