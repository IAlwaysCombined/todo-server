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
 * @property int $table_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, Table> $tables
 * @property-read int|null $tables_count
 * @method static WorkspaceFactory factory($count = null, $state = [])
 * @method static Builder|Workspace newModelQuery()
 * @method static Builder|Workspace newQuery()
 * @method static Builder|Workspace query()
 * @method static Builder|Workspace whereCreatedAt($value)
 * @method static Builder|Workspace whereId($value)
 * @method static Builder|Workspace whereTitle($value)
 * @method static Builder|Workspace whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Workspace extends Model
{
    use HasFactory;

    protected $fillable = [
      'id',
      'title',
      'table_id'
    ];

    /**
     * Связь к сущности table
     * @return HasMany
     */
    public function tables(): HasMany
    {
        return $this->hasMany(Table::class);
    }
}
