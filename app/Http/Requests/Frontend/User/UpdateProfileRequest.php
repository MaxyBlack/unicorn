<?php

namespace Unicorn\Http\Requests\Frontend\User;

use Unicorn\Http\Requests\Request;

/**
 * Class UpdateProfileRequest
 * @package Unicorn\Http\Requests\Frontend\User
 */
class UpdateProfileRequest extends Request
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
            'name'  => 'required',
            'email' => 'sometimes|required|email',
        ];
    }
}