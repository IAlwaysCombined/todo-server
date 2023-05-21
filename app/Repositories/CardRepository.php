<?php

namespace App\Repositories;

use App\Models\Card;
use App\RepositoriesImpl\CardRepositoryImpl;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CardRepository implements CardRepositoryImpl
{
    private Card $card;

    public function __construct(Card $card)
    {
        $this->card = $card;
    }

    public function index(): Collection|array
    {
        return $this->card::query()->get()->all();
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
