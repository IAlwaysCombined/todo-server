<?php

namespace App\Models;

use Database\Factories\WorkspaceFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Workspace
 *
 * @property int $id
 * @property string $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static WorkspaceFactory factory($count = null, $state = [])
 * @method static Builder|Workspace newModelQuery()
 * @method static Builder|Workspace newQuery()
 * @method static Builder|Workspace query()
 * @method static Builder|Workspace whereCreatedAt($value)
 * @method static Builder|Workspace whereId($value)
 * @method static Builder|Workspace whereTitle($value)
 * @method static Builder|Workspace whereUpdatedAt($value)
 * @property-read Collection<int, Board> $boards
 * @property-read int|null $boards_count
 * @mixin Eloquent
 */
class Workspace extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title'
    ];

    /**
     * Связь к сущьности Board
     */
    public function boards(): HasMany
    {
        return $this->hasMany(Board::class);
    }
}
