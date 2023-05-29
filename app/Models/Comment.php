<?php

namespace App\Models;

use Database\Factories\CommentFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

/**
 * App\Models\Comment
 *
 * @method static CommentFactory factory($count = null, $state = [])
 * @method static Builder|Comment newModelQuery()
 * @method static Builder|Comment newQuery()
 * @method static Builder|Comment query()
 * @property int $id
 * @property string $text
 * @property int|null $user_id
 * @property int|null $card_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Comment whereCardId($value)
 * @method static Builder|Comment whereCreatedAt($value)
 * @method static Builder|Comment whereId($value)
 * @method static Builder|Comment whereText($value)
 * @method static Builder|Comment whereUpdatedAt($value)
 * @method static Builder|Comment whereUserId($value)
 * @property-read User|null $user
 * @mixin Eloquent
 */
class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'text',
        'user_id',
        'card_id',
    ];

    /**
     * Поведение для поля user_id при создании новой записи в базе данных
     */
    protected static function booted(): void
    {
        static::creating(function ($model) {
            $model->user_id = auth()->user()->getAuthIdentifier();
        });
    }

    /**
     * Связь к сущьности User
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
