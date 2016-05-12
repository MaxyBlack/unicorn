<?php

namespace Unicorn\Models\Access\Permission;

use Illuminate\Database\Eloquent\Model;
use Unicorn\Models\Access\Permission\Traits\Attribute\PermissionAttribute;
use Unicorn\Models\Access\Permission\Traits\Relationship\PermissionRelationship;

/**
 * Class Permission
 * @package Unicorn\Models\Access\Permission
 */
class Permission extends Model
{
    use PermissionRelationship, PermissionAttribute;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('access.permissions_table');
    }
}