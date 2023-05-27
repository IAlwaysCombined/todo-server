<?php

namespace App\Repositories;

use App\Http\Requests\CardRequest;
use App\Models\Card;
use App\RepositoriesImpl\CardRepositoryImpl;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CardRepository implements CardRepositoryImpl
{
    private Card $card;
    private CardUser $cardUser;

    /**
     * @param Card $card
     * @param CardUser $cardUser
     */
    public function __construct(Card $card, CardUser $cardUser)
    {
        $this->card = $card;
        $this->cardUser = $cardUser;
    }

    /**
     * @return Collection|array
     */
    public function index(): Collection|array
    {
        return $this->card::query()->get()->all();
    }

    /**
     * @param int $id
     * @return Builder|array|Collection|Model
     */
    public function view(int $id): Builder|array|Collection|Model
    {
        return $this->card::query()->find($id);
    }

    /**
     * @param CardRequest|Request $request
     * @return Card
     */
    public function create(CardRequest|Request $request): Card
    {
        $this->card::query()->create($request->all());
        return $this->card;
    }

    /**
     * @param CardRequest|Request $request
     * @param int $id
     * @return Card
     */
    public function update(CardRequest|Request $request, int $id): Card
    {
        $this->card::query()->findOrFail($id)->update($request->all());
        return $this->card;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->card::query()->find($id)->delete();
    }

    /**
     * @param CardUserRequest $request
     * @return Model|Table|\Illuminate\Database\Query\Builder
     */
    public function addMember(CardUserRequest $request): Model|Table|\Illuminate\Database\Query\Builder
    {
        return $this->cardUser::query()->create(['card_id' => $request->card_id, 'user_id' => $request->user_id]);
    }
}
