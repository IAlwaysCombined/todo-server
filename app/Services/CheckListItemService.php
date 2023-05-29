<?php

namespace App\Services;

use App\Repositories\CheckListRepository;
use App\RepositoriesImpl\CheckListItemRepositoryImpl;
use App\RepositoriesImpl\CheckListRepositoryImpl;
use Illuminate\Database\Eloquent\Collection;

class CheckListItemService
{
    private CheckListItemRepositoryImpl $checkListItemRepositoryImpl;

    /**
     * @param CheckListItemRepositoryImpl $checkListItemRepositoryImpl
     */
    public function __construct(CheckListItemRepositoryImpl $checkListItemRepositoryImpl)
    {
        $this->checkListItemRepositoryImpl = $checkListItemRepositoryImpl;
    }

    /**
     * @param int $card_id
     * @return Collection|array
     */
    public function index(int $card_id): Collection|array
    {
        return $this->checkListItemRepositoryImpl->index($card_id);
    }
}
