<?php

namespace App\Services;

use App\Http\Requests\CardRequest;
use App\Models\Card;
use App\Repositories\CardRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

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

    public function view(int $id): Card
    {
        return $this->cardRepository->view($id);
    }

    public function create(CardRequest $request): Builder|Model
    {
        return $this->cardRepository->create($request);
    }

    public function update(CardRequest $request, int $id): int
    {
        return $this->cardRepository->update($request, $id);
    }

    public function delete(int $id): mixed
    {
        return $this->cardRepository->delete($id);
    }
}
