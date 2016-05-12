<?php

namespace Unicorn\Http\Requests\Backend\Access\User;

use Unicorn\Http\Requests\Request;

/**
 * Class DeleteUserRequest
 * @package Unicorn\Http\Requests\Backend\Access\User
 */
class DeleteUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('delete-users');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
