<?php

namespace App\Models;

use Database\Factories\BoardFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Board
 *
 * @property int $id
 * @property string $title
 * @property int|null $workspace_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static BoardFactory factory($count = null, $state = [])
 * @method static Builder|Board newModelQuery()
 * @method static Builder|Board newQuery()
 * @method static Builder|Board query()
 * @method static Builder|Board whereCreatedAt($value)
 * @method static Builder|Board whereId($value)
 * @method static Builder|Board whereTitle($value)
 * @method static Builder|Board whereUpdatedAt($value)
 * @method static Builder|Board whereWorkspaceId($value)
 * @property-read Collection<int, Table> $tables
 * @property-read int|null $tables_count
 * @mixin Eloquent
 */
class Board extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'workspace_id'
    ];

    /**
     * Связь к сущьности Table
     */
    public function tables(): HasMany
    {
        return $this->hasMany(Table::class);
    }
}
