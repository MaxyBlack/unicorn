<?php

namespace Unicorn\Models\Access\Permission\Traits\Relationship;

/**
 * Class PermissionDependencyRelationship
 * @package Unicorn\Models\Access\Permission\Traits\Relationship
 */
trait PermissionDependencyRelationship
{
    /**
     * @return mixed
     */
    public function permission()
    {
        return $this->hasOne(config('access.permission'), 'id', 'dependency_id');
    }
}