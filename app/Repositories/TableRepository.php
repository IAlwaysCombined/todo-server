<?php

namespace App\Repositories;

use App\Models\Table;
use App\RepositoriesImpl\TableRepositoryImpl;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class TableRepository implements TableRepositoryImpl
{
    private Table $table;

    public function __construct(Table $table)
    {
        $this->table = $table;
    }

    public function index(): Collection|array
    {
        return $this->table::query()->get()->all();
    }

    public function view(int $id)
    {
        // TODO: Implement view() method.
    }

    public function create(Request $request)
    {
        // TODO: Implement create() method.
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
