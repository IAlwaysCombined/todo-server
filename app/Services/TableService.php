<?php

namespace App\Services;

use App\Repositories\TableRepository;
use Illuminate\Database\Eloquent\Collection;

class TableService
{
    private TableRepository $tableRepository;

    public function __construct(TableRepository $tableRepository)
    {
        $this->tableRepository = $tableRepository;
    }

    public function index(): Collection|array
    {
        return $this->tableRepository->index();
    }
}
