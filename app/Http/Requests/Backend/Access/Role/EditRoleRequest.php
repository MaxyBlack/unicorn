<?php

namespace Unicorn\Http\Requests\Backend\Access\Role;

use Unicorn\Http\Requests\Request;

/**
 * Class EditRoleRequest
 * @package Unicorn\Http\Requests\Backend\Access\Role
 */
class EditRoleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-roles');
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
