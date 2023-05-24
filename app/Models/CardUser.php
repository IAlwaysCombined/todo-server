<?php

namespace App\Models;

use Database\Factories\TableFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * App\Models\CardUser
 *
 * @property int $id
 * @property string $title
 * @property int $card_id
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property int|null $workspace_id
 * @property-read int|null $cards_count
 * @method static TableFactory factory($count = null, $state = [])
 * @method static Builder|Table newModelQuery()
 * @method static Builder|Table newQuery()
 * @method static Builder|Table query()
 * @method static Builder|Table whereCreatedAt($value)
 * @method static Builder|Table whereId($value)
 * @method static Builder|Table whereTitle($value)
 * @method static Builder|Table whereUpdatedAt($value)
 * @method static Builder|Table whereWorkspaceId($value)
 * @mixin Eloquent
 */
class CardUser extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'card_id'
    ];
}
