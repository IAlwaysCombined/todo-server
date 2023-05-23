<?php

namespace App\Repositories;

use App\Http\Requests\CardRequest;
use App\Models\Card;
use App\RepositoriesImpl\CardRepositoryImpl;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Spatie\Ignition\Tests\TestClasses\Models\Car;

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

    public function view(int $id): Card
    {
        return $this->card::query()->get()->find($id);
    }

    public function create(CardRequest|Request $request): Card
    {
        $this->card->fill($request->all());
        $this->card->user_id = auth()->user()->getAuthIdentifier();
        $this->card->save();
        return $this->card;
    }

    public function update(CardRequest|Request $request, int $id): Card
    {
        $this->card::query()->update($request->all());
        return $this->card;
    }

    public function delete(int $id): mixed
    {
        return $this->card::query()->find($id)->delete();
    }
}
