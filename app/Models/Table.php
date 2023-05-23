<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $title
 * @property int $card_id
 * @property mixed $created_at
 * @property mixed $updated_at
 */
class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'card_id'
    ];

    /**
     * Связь к карточкам столбца
     * @return HasMany
     */
    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }
}
