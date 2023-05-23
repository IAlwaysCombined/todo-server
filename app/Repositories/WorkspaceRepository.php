<?php

namespace App\Repositories;

use App\Http\Requests\WorkspaceRequest;
use App\Models\Workspace;
use App\RepositoriesImpl\WorkspaceRepositoryImpl;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class WorkspaceRepository implements WorkspaceRepositoryImpl
{
    private Workspace $workspace;

    public function __construct(Workspace $workspace)
    {
        $this->workspace = $workspace;
    }

    public function index(): Collection|array
    {
        return $this->workspace::query()->with('tables')->get()->all();
    }

    public function view(int $id)
    {
        return $this->workspace::query()->with('tables')->get()->find($id);
    }

    public function create(WorkspaceRequest|Request $request)
    {
        return $this->workspace::query()->create($request->all());
    }

    public function update(Request $request, int $id)
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }
}
