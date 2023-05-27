<?php

namespace App\Services;

use App\Http\Requests\TableRequest;
use App\Models\Table;
use App\Repositories\TableRepository;
use App\RepositoriesImpl\TableRepositoryImpl;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class TableService
{
    private TableRepositoryImpl $tableRepositoryImpl;

    /**
     * @param TableRepositoryImpl $tableRepositoryImpl
     */
    public function __construct(TableRepositoryImpl $tableRepositoryImpl)
    {
        $this->tableRepositoryImpl = $tableRepositoryImpl;
    }

    /**
     * @return Collection|array
     */
    public function index(): Collection|array
    {
        return $this->tableRepositoryImpl->index();
    }

    /**
     * @param int $id
     * @return array|Builder|Collection|Model
     */
    public function view(int $id): array|Builder|Collection|Model
    {
        return $this->tableRepositoryImpl->view($id);
    }

    /**
     * @param TableRequest $request
     * @return Builder|Model
     */
    public function create(TableRequest $request): Builder|Model
    {
        return $this->tableRepositoryImpl->create($request);
    }

    /**
     * @param TableRequest $request
     * @param int $id
     * @return Table
     */
    public function update(TableRequest $request, int $id): Table
    {
        return $this->tableRepositoryImpl->update($request, $id);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->tableRepositoryImpl->delete($id);
    }
}
