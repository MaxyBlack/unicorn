<?php

namespace Unicorn\Models\Access\Role;

use Illuminate\Database\Eloquent\Model;
use Unicorn\Models\Access\Role\Traits\RoleAccess;
use Unicorn\Models\Access\Role\Traits\Attribute\RoleAttribute;
use Unicorn\Models\Access\Role\Traits\Relationship\RoleRelationship;

/**
 * Class Role
 * @package Unicorn\Models\Access\Role
 */
class Role extends Model
{
    use RoleAccess, RoleAttribute, RoleRelationship;

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
        $this->table = config('access.roles_table');
    }
}
