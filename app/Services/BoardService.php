<?php

namespace App\Services;

use App\Http\Requests\BoardRequest;
use App\Models\Board;
use App\RepositoriesImpl\BoardRepositoryImpl;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BoardService
{
    private BoardRepositoryImpl $boardRepositoryImpl;

    /**
     * @param BoardRepositoryImpl $boardRepositoryImpl
     */
    public function __construct(BoardRepositoryImpl $boardRepositoryImpl)
    {
        $this->boardRepositoryImpl = $boardRepositoryImpl;
    }

    /**
     * @return Collection|array
     */
    public function index(): Collection|array
    {
        return $this->boardRepositoryImpl->index();
    }

    /**
     * @param int $id
     * @return array|Builder|Collection|Model
     */
    public function view(int $id): array|Builder|Collection|Model
    {
        return $this->boardRepositoryImpl->view($id);
    }

    /**
     * @param BoardRequest $request
     * @return Board
     */
    public function create(BoardRequest $request): Board
    {
        return $this->boardRepositoryImpl->create($request);
    }

    /**
     * @param BoardRequest $request
     * @param int $id
     * @return Board
     */
    public function update(BoardRequest $request, int $id): Board
    {
        return $this->boardRepositoryImpl->update($request, $id);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->boardRepositoryImpl->delete($id);
    }
}
