<?php

namespace App\Repositories;

use App\Http\Requests\BoardRequest;
use App\Models\Board;
use App\RepositoriesImpl\BoardRepositoryImpl;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class BoardRepository implements BoardRepositoryImpl
{
    private Board $board;

    /**
     * @param Board $board
     */
    public function __construct(Board $board)
    {
        $this->board = $board;
    }

    /**
     * @return array|Collection
     */
    public function index(): array|Collection
    {
        return $this->board::query()->with('tables')->get()->all();
    }

    /**
     * @param int $id
     * @return array|Model|Collection|Builder|Board|null
     */
    public function view(int $id): array|Model|Collection|Builder|Board|null
    {
        return $this->board::query()->with('tables')->findOrFail($id);
    }

    /**
     * @param BoardRequest|Request $request
     * @return Model|Builder|Board
     */
    public function create(BoardRequest|Request $request): Model|Builder|Board
    {
        return $this->board::query()->create($request->all());
    }

    /**
     * @param BoardRequest|Request $request
     * @param int $id
     * @return Board
     */
    public function update(BoardRequest|Request $request, int $id): Board
    {
        $this->board::query()->findOrFail($id)->update($request->all());
        return $this->board;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->board::query()->find($id)->delete();
    }
}
