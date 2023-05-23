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

    /**
     * @param CardRepository $cardRepository
     */
    public function __construct(CardRepository $cardRepository)
    {
        $this->cardRepository = $cardRepository;
    }

    /**
     * @return Collection|array
     */
    public function index(): Collection|array
    {
        return $this->cardRepository->index();
    }

    /**
     * @param int $id
     * @return array|Builder|Collection|Model
     */
    public function view(int $id): array|Builder|Collection|Model
    {
        return $this->cardRepository->view($id);
    }

    /**
     * @param CardRequest $request
     * @return Card
     */
    public function create(CardRequest $request): Card
    {
        return $this->cardRepository->create($request);
    }

    /**
     * @param CardRequest $request
     * @param int $id
     * @return Card
     */
    public function update(CardRequest $request, int $id): Card
    {
        return $this->cardRepository->update($request, $id);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->cardRepository->delete($id);
    }
}
