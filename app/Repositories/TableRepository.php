<?php

namespace App\Repositories;

use App\Http\Requests\TableRequest;
use App\Models\Table;
use App\RepositoriesImpl\TableRepositoryImpl;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TableRepository implements TableRepositoryImpl
{
    private Table $table;

    /**
     * @param Table $table
     */
    public function __construct(Table $table)
    {
        $this->table = $table;
    }

    /**
     * @return Collection|array
     */
    public function index(): Collection|array
    {
        return $this->table::query()->with('cards')->get()->all();
    }

    /**
     * @param int $id
     * @return Builder|array|Collection|Model
     */
    public function view(int $id): Builder|array|Collection|Model
    {
        return $this->table::query()->with('cards')->find($id);
    }

    /**
     * @param TableRequest|Request $request
     * @return Builder|Model
     */
    public function create(TableRequest|Request $request): Builder|Model
    {
        return $this->table::query()->create($request->all());
    }

    /**
     * @param TableRequest|Request $request
     * @param int $id
     * @return Table
     */
    public function update(TableRequest|Request $request, int $id): Table
    {
        $this->table::query()->find($id)->update($request->all());
        return $this->table;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->table::query()->find($id)->delete();
    }
}
