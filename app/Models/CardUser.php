<?php

namespace App\Models;

use Database\Factories\CardUserFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\CardUser
 *
 * @property int $id
<<<<<<< HEAD
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
=======
 * @property int|null $user_id
 * @property int|null $card_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static CardUserFactory factory($count = null, $state = [])
 * @method static Builder|CardUser newModelQuery()
 * @method static Builder|CardUser newQuery()
 * @method static Builder|CardUser query()
 * @method static Builder|CardUser whereCardId($value)
 * @method static Builder|CardUser whereCreatedAt($value)
 * @method static Builder|CardUser whereId($value)
 * @method static Builder|CardUser whereUpdatedAt($value)
 * @method static Builder|CardUser whereUserId($value)
>>>>>>> origin/dev
 * @mixin Eloquent
 */
class CardUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'card_id',
        'user_id'
    ];
}
