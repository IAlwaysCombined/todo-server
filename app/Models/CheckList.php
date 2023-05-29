<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\CheckListFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\CheckList
 *
 * @property int $id
 * @property string $title
 * @property int|null $card_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static CheckListFactory factory($count = null, $state = [])
 * @method static Builder|CheckList newModelQuery()
 * @method static Builder|CheckList newQuery()
 * @method static Builder|CheckList query()
 * @method static Builder|CheckList whereCreatedAt($value)
 * @method static Builder|CheckList whereTitle($value)
 * @method static Builder|CheckList whereId($value)
 * @method static Builder|CheckList whereCardId($value)
 * @method static Builder|CheckList whereUpdatedAt($value)
 * @mixin Eloquent
 */
class CheckList extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'card_id'
    ];

    /**
     * Связь к сущьности CheckListItem
     */
    public function cardListItems(): HasMany
    {
        return $this->hasMany(CheckListItem::class);
    }
}
