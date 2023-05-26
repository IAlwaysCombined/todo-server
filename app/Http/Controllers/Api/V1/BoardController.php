<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\BoardRequest;
use App\Services\BoardService;
use App\Services\CardService;
use Illuminate\Http\Request;

/**
 * Контроллер с досками
 */
class BoardController extends Controller
{
    private BoardService $boardService;

    /**
     * Инициализация сервиса
     * @param BoardService $boardService
     */
    public function __construct(BoardService $boardService)
    {
        $this->boardService = $boardService;
    }

    /**
     * Список досок
     */
    public function index()
    {
        
    }

    /**
     * Создание новой доски
     */
    public function store(BoardRequest $request)
    {
        //
    }

    /**
     * Информация о доске
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Обновление задачи
     */
    public function update(BoardRequest $request, int $id)
    {
        //
    }

    /**
     * Удаление задачи
     */
    public function destroy(int $id)
    {
        //
    }
}
