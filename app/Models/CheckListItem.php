<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\CheckListItemFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\CheckListItem
 *
 * @property int $id
 * @property string $name
 * @property boolean $is_completed
 * @property int|null $check_list_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static CheckListItemFactory factory($count = null, $state = [])
 * @method static Builder|CheckListItem newModelQuery()
 * @method static Builder|CheckListItem newQuery()
 * @method static Builder|CheckListItem query()
 * @method static Builder|CheckListItem whereCreatedAt($value)
 * @method static Builder|CheckListItem whereName($value)
 * @method static Builder|CheckListItem whereId($value)
 * @method static Builder|CheckListItem whereCheckListId($value)
 * @method static Builder|CheckListItem whereIsCompeted($value)
 * @method static Builder|CheckListItem whereUpdatedAt($value)
 * @mixin Eloquent
 */
class CheckListItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'is_completed',
        'check_list_id'
    ];
}
