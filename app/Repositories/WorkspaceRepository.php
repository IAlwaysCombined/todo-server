<?php

namespace App\Repositories;

use App\Http\Requests\WorkspaceRequest;
use App\Models\Workspace;
use App\RepositoriesImpl\WorkspaceRepositoryImpl;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class WorkspaceRepository implements WorkspaceRepositoryImpl
{
    private Workspace $workspace;

    /**
     * @param Workspace $workspace
     */
    public function __construct(Workspace $workspace)
    {
        $this->workspace = $workspace;
    }

    /**
     * @return Collection|array
     */
    public function index(): Collection|array
    {
        return $this->workspace::query()->get()->all();
    }

    /**
     * @param int $id
     * @return Model|Collection|Builder|array|null
     */
    public function view(int $id): Model|Collection|Builder|array|null
    {
        return $this->workspace::query()->findOrFail($id);
    }

    /**
     * @param WorkspaceRequest|Request $request
     * @return Model|Builder
     */
    public function create(WorkspaceRequest|Request $request): Model|Builder
    {
        return $this->workspace::query()->create($request->all());
    }

    /**
     * @param WorkspaceRequest|Request $request
     * @param int $id
     * @return Workspace
     */
    public function update(WorkspaceRequest|Request $request, int $id): Workspace
    {
        $this->workspace::query()->find($id)->update($request->all());
        return $this->workspace;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->workspace::query()->find($id)->delete();
    }

    /**
     * @return Collection|array
     */
    public function extendedWorkspace(): Collection|array
    {
        return $this->workspace::query()->with('boards')->get()->all();
    }
}
