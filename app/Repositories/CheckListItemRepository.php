<?php

namespace App\Repositories;

use App\Models\CheckListItem;
use App\RepositoriesImpl\CheckListItemRepositoryImpl;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CheckListItemRepository implements CheckListItemRepositoryImpl
{
    private CheckListItem $checkListItem;

    /**
     * @param CheckListItem $checkListItem
     */
    public function __construct(CheckListItem $checkListItem)
    {
        $this->checkListItem = $checkListItem;
    }

    /**
     * @return Collection|array
     */
    public function index(): Collection|array
    {
        return $this->checkListItem::query()->get()->all();
    }

    /**
     * @param int $id
     * @return Model|Collection|CheckListItem|array|Builder|null
     */
    public function view(int $id): Model|Collection|CheckListItem|array|Builder|null
    {
        return $this->checkListItem::query()->findOrFail($id);
    }

    public function create(Request $request)
    {
        // TODO: Implement create() method.
    }

    public function update(Request $request, int $id)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param int $id
     * @return bool|mixed|null
     */
    public function delete(int $id): bool
    {
        return $this->checkListItem::query()->findOrFail($id)->delete();
    }
}
