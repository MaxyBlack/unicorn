<?php

namespace Unicorn\Http\Requests\Frontend\Auth;

use Unicorn\Http\Requests\Request;

/**
 * Class SendResetLinkEmailRequest
 * @package Unicorn\Http\Requests\Frontend\Access
 */
class SendResetLinkEmailRequest extends Request
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
            'email' => 'required|email',
        ];
    }
}
