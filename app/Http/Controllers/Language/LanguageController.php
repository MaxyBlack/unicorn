<?php

namespace Unicorn\Http\Controllers\Language;

use Unicorn\Http\Controllers\Controller;

/**
 * Class LanguageController
 * @package Unicorn\Http\Controllers
 */
class LanguageController extends Controller
{
    /**
     * @param $lang
     * @return \Illuminate\Http\RedirectResponse
     */
    public function swap($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}