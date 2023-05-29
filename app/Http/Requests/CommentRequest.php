<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Определите, авторизован ли пользователь для выполнения этого запроса
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Получите правила проверки, применимые к запросу
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'text' => 'required|min:2',
            'card_id' => 'required'
        ];
    }
}
