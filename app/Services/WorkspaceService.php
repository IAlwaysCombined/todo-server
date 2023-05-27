<?php

namespace App\Services;

use App\Http\Requests\WorkspaceRequest;
use App\Models\Workspace;
use App\Repositories\WorkspaceRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class WorkspaceService
{
    private WorkspaceRepository $workspaceRepository;

    /**
     * @param WorkspaceRepository $workspaceRepository
     */
    public function __construct(WorkspaceRepository $workspaceRepository)
    {
        $this->workspaceRepository = $workspaceRepository;
    }

    /**
     * @return Collection|array
     */
    public function index(): Collection|array
    {
        return $this->workspaceRepository->index();
    }

    /**
     * @param int $id
     * @return array|Builder|Collection|Model
     */
    public function view(int $id): array|Builder|Collection|Model
    {
        return $this->workspaceRepository->view($id);
    }

    /**
     * @param WorkspaceRequest $request
     * @return Builder|Model
     */
    public function create(WorkspaceRequest $request): Builder|Model
    {
        return $this->workspaceRepository->create($request);
    }

    /**
     * @param WorkspaceRequest $request
     * @param int $id
     * @return Workspace
     */
    public function update(WorkspaceRequest $request, int $id): Workspace
    {
        return $this->workspaceRepository->update($request, $id);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->workspaceRepository->delete($id);
    }

    /**
     * @return Collection|array
     */
    public function extendedWorkspace(): Collection|array
    {
        return $this->workspaceRepository->extendedWorkspace();
    }
}
