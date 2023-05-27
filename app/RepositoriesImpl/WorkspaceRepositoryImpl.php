<?php

namespace App\RepositoriesImpl;

use App\RepositoriesImpl\base\CrudRepositoryImpl;

interface WorkspaceRepositoryImpl extends CrudRepositoryImpl
{
    public function extendedWorkspace();
}
