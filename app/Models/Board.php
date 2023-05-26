<?php

namespace App\Models;

use Database\Factories\BoardFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
}
