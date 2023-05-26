<?php

namespace App\Services;

use App\Http\Requests\BoardRequest;
use App\Models\Board;
use App\Repositories\BoardRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BoardService
{
    private BoardRepository $boardRepository;

    /**
     * @param BoardRepository $boardRepository
     */
    public function __construct(BoardRepository $boardRepository)
    {
        $this->boardRepository = $boardRepository;
    }

    /**
     * @return Collection|array
     */
    public function index(): Collection|array
    {
        return $this->boardRepository->index();
    }

    /**
     * @param int $id
     * @return array|Builder|Collection|Model
     */
    public function view(int $id): array|Builder|Collection|Model
    {
        return $this->boardRepository->view($id);
    }

    /**
     * @param BoardRequest $request
     * @return Board
     */
    public function create(BoardRequest $request): Board
    {
        return $this->boardRepository->create($request);
    }

    /**
     * @param BoardRequest $request
     * @param int $id
     * @return Board
     */
    public function update(BoardRequest $request, int $id): Board
    {
        return $this->boardRepository->update($request, $id);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->boardRepository->delete($id);
    }
}
