<?php

namespace App\Models;

use Database\Factories\CardFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Card
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int|null $table_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static CardFactory factory($count = null, $state = [])
 * @method static Builder|Card newModelQuery()
 * @method static Builder|Card newQuery()
 * @method static Builder|Card query()
 * @method static Builder|Card whereCreatedAt($value)
 * @method static Builder|Card whereDescription($value)
 * @method static Builder|Card whereId($value)
 * @method static Builder|Card whereTableId($value)
 * @method static Builder|Card whereTitle($value)
 * @method static Builder|Card whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'table_id'
    ];

    /**
     * Связь к сущьности User
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'card_users');
    }
}
