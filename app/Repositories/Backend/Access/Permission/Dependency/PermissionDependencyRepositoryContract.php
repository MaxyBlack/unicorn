<?php

namespace Unicorn\Repositories\Backend\Access\Permission\Dependency;

/**
 * Interface PermissionDependencyRepositoryContract
 * @package Unicorn\Repositories\Backend\Permission\Dependency
 */
interface PermissionDependencyRepositoryContract
{
    /**
     * @param  $permission_id
     * @param  $dependency_id
     * @return mixed
     */
    public function create($permission_id, $dependency_id);

    /**
     * @param  $permission_id
     * @return mixed
     */
    public function clear($permission_id);
}
