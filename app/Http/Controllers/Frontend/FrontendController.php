<?php

namespace Unicorn\Http\Controllers\Frontend;

use Unicorn\Http\Controllers\Controller;

/**
 * Class FrontendController
 * @package Unicorn\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }
}
