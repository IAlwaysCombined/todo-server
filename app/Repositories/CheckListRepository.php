<?php

namespace App\Repositories;

use App\Models\CheckList;
use App\RepositoriesImpl\CheckListRepositoryImpl;
use Illuminate\Http\Request;

class CheckListRepository implements CheckListRepositoryImpl
{
    private CheckList $checkList;

    /**
     * @param CheckList $checkList
     */
    public function __construct(CheckList $checkList)
    {
        $this->checkList = $checkList;
    }

    public function index()
    {
        // TODO: Implement index() method.
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
