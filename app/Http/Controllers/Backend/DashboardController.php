<?php

namespace Unicorn\Http\Controllers\Backend;

use Unicorn\Http\Controllers\Controller;

/**
 * Class DashboardController
 * @package Unicorn\Http\Controllers\Backend
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.dashboard');
    }
}