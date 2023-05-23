<?php

namespace App\Services;

use App\Http\Requests\TableRequest;
use App\Models\Table;
use App\Repositories\TableRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class TableService
{
    private TableRepository $tableRepository;

    /**
     * @param TableRepository $tableRepository
     */
    public function __construct(TableRepository $tableRepository)
    {
        $this->tableRepository = $tableRepository;
    }

    /**
     * @return Collection|array
     */
    public function index(): Collection|array
    {
        return $this->tableRepository->index();
    }

    /**
     * @param int $id
     * @return array|Builder|Collection|Model
     */
    public function view(int $id): array|Builder|Collection|Model
    {
        return $this->tableRepository->view($id);
    }

    /**
     * @param TableRequest $request
     * @return Builder|Model
     */
    public function create(TableRequest $request): Builder|Model
    {
        return $this->tableRepository->create($request);
    }

    /**
     * @param TableRequest $request
     * @param int $id
     * @return Table
     */
    public function update(TableRequest $request, int $id): Table
    {
        return $this->tableRepository->update($request, $id);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->tableRepository->delete($id);
    }
}
