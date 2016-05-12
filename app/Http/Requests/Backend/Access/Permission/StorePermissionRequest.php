<?php

namespace Unicorn\Http\Requests\Backend\Access\Permission;

use Unicorn\Http\Requests\Request;

/**
 * Class StorePermissionRequest
 * @package Unicorn\Http\Requests\Backend\Access\Permission
 */
class StorePermissionRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-permissions');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'         => 'required',
            'display_name' => 'required',
        ];
    }
}
