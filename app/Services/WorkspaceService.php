<?php

namespace App\Services;

use App\Http\Requests\WorkspaceRequest;
use App\Models\Workspace;
use App\Repositories\WorkspaceRepository;
use App\RepositoriesImpl\WorkspaceRepositoryImpl;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class WorkspaceService
{
    private WorkspaceRepositoryImpl $workspaceRepositoryImpl;

    /**
     * @param WorkspaceRepositoryImpl $workspaceRepositoryImpl
     */
    public function __construct(WorkspaceRepositoryImpl $workspaceRepositoryImpl)
    {
        $this->workspaceRepositoryImpl = $workspaceRepositoryImpl;
    }

    /**
     * @return Collection|array
     */
    public function index(): Collection|array
    {
        return $this->workspaceRepositoryImpl->index();
    }

    /**
     * @param int $id
     * @return array|Builder|Collection|Model
     */
    public function view(int $id): array|Builder|Collection|Model
    {
        return $this->workspaceRepositoryImpl->view($id);
    }

    /**
     * @param WorkspaceRequest $request
     * @return Builder|Model
     */
    public function create(WorkspaceRequest $request): Builder|Model
    {
        return $this->workspaceRepositoryImpl->create($request);
    }

    /**
     * @param WorkspaceRequest $request
     * @param int $id
     * @return Workspace
     */
    public function update(WorkspaceRequest $request, int $id): Workspace
    {
        return $this->workspaceRepositoryImpl->update($request, $id);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->workspaceRepositoryImpl->delete($id);
    }

    /**
     * @return Collection|array
     */
    public function extendedWorkspace(): Collection|array
    {
        return $this->workspaceRepositoryImpl->extendedWorkspace();
    }
}
