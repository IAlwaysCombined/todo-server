<?php

namespace App\Services;

use App\Repositories\WorkspaceRepository;
use Illuminate\Database\Eloquent\Collection;

class WorkspaceService
{
    private WorkspaceRepository $workspaceRepository;

    public function __construct(WorkspaceRepository $workspaceRepository)
    {
        $this->workspaceRepository = $workspaceRepository;
    }

    public function index(): Collection|array
    {
        return $this->workspaceRepository->index();
    }

}
