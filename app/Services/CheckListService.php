<?php

namespace App\Services;

use App\Repositories\CheckListRepository;
use App\RepositoriesImpl\CheckListRepositoryImpl;

class CheckListService
{
    private CheckListRepositoryImpl $checkListRepositoryImpl;

    public function __construct(CheckListRepositoryImpl $checkListRepositoryImpl)
    {
        $this->checkListRepositoryImpl = $checkListRepositoryImpl;
    }



}
