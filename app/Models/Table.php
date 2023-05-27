<?php

namespace App\Models;

use Database\Factories\TableFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Table
 *
 * @property int $id
 * @property string $title
 * @property int|null $board_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static TableFactory factory($count = null, $state = [])
 * @method static Builder|Table newModelQuery()
 * @method static Builder|Table newQuery()
 * @method static Builder|Table query()
 * @method static Builder|Table whereBoardId($value)
 * @method static Builder|Table whereCreatedAt($value)
 * @method static Builder|Table whereId($value)
 * @method static Builder|Table whereTitle($value)
 * @method static Builder|Table whereUpdatedAt($value)
 * @property int|null $workspace_id
 * @method static Builder|Table whereWorkspaceId($value)
 * @mixin Eloquent
 */
class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'board_id'
    ];

    /**
     * Связь к сущьности Card
     */
    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }
}
