<?php

namespace Unicorn\Http\Requests\Frontend\Auth;

use Unicorn\Http\Requests\Request;

/**
 * Class LoginRequest
 * @package Unicorn\Http\Requests\Frontend\Auth
 */
class LoginRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'    => 'required|email',
            'password' => 'required',
        ];
    }
}
