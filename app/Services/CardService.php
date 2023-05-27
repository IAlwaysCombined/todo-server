<?php

namespace App\Services;

use App\Http\Requests\CardRequest;
use App\Http\Requests\CardUserRequest;
use App\Models\Card;
use App\Models\CardUser;
use App\Models\Table;
use App\Repositories\CardRepository;
use App\RepositoriesImpl\CardRepositoryImpl;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CardService
{
    private CardRepositoryImpl $cardRepositoryImpl;

    /**
     * @param CardRepositoryImpl $cardRepositoryImpl
     */
    public function __construct(CardRepositoryImpl $cardRepositoryImpl)
    {
        $this->cardRepositoryImpl = $cardRepositoryImpl;
    }

    /**
     * @return Collection|array
     */
    public function index(): Collection|array
    {
        return $this->cardRepositoryImpl->index();
    }

    /**
     * @param int $id
     * @return array|Builder|Collection|Model
     */
    public function view(int $id): array|Builder|Collection|Model
    {
        return $this->cardRepositoryImpl->view($id);
    }

    /**
     * @param CardRequest $request
     * @return Card
     */
    public function create(CardRequest $request): Card
    {
        return $this->cardRepositoryImpl->create($request);
    }

    /**
     * @param CardRequest $request
     * @param int $id
     * @return Card
     */
    public function update(CardRequest $request, int $id): Card
    {
        return $this->cardRepositoryImpl->update($request, $id);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->cardRepositoryImpl->delete($id);
    }

    /**
     * @param CardUserRequest $request
     * @return Model|CardUser|\Illuminate\Database\Query\Builder
     */
    public function addMember(CardUserRequest $request): Model|CardUser|\Illuminate\Database\Query\Builder
    {
        return $this->cardRepositoryImpl->addMember($request);
    }
}
