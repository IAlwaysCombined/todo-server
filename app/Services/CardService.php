<?php

namespace App\Services;

use App\Repositories\CardRepository;
use Illuminate\Database\Eloquent\Collection;

class CardService
{
    private CardRepository $cardRepository;

    public function __construct(CardRepository $cardRepository)
    {
        $this->cardRepository = $cardRepository;
    }

    public function index(): Collection|array
    {
        return $this->cardRepository->index();
    }
}
