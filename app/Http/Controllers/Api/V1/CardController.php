<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CardRequest;
use App\Http\Requests\CardUserRequest;
use App\Http\Resources\CardResource;
use App\Http\Resources\CardUserResource;
use App\Models\Table;
use App\Services\CardService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * Контроллер с карточками задач
 */
class CardController extends Controller
{
    private CardService $cardService;

    /**
     * Инициализация сервиса
     * @param CardService $cardService
     */
    public function __construct(CardService $cardService)
    {
        $this->cardService = $cardService;
    }

    /**
     * Список задач
     */
    public function index(): AnonymousResourceCollection
    {
        return CardResource::collection($this->cardService->index());
    }

    /**
     * Создание новой задачи
     */
    public function store(CardRequest $request): CardResource
    {
        return new CardResource($this->cardService->create($request));
    }

    /**
     * Информация о задаче
     */
    public function show(int $id): CardResource
    {
        return new CardResource($this->cardService->view($id));
    }

    /**
     * Обновление задачи
     */
    public function update(CardRequest $request, int $id): CardResource
    {
        return new CardResource($this->cardService->update($request, $id));
    }

    /**
     * Удаление задачи
     */
    public function destroy(int $id): bool
    {
        return $this->cardService->delete($id);
    }

    /**
     * Добавление участника к карточке
     */
    public function addMember(CardUserRequest $request): CardUserResource
    {
        return new CardUserResource($this->cardService->addMember($request));
    }
}
