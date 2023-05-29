<?php

namespace App\Models;

use App\Http\Enum\RoleEnum;
use Database\Factories\RoleFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, User> $users
 * @property-read int|null $users_count
 * @method static RoleFactory factory($count = null, $state = [])
 * @method static Builder|Role newModelQuery()
 * @method static Builder|Role newQuery()
 * @method static Builder|Role query()
 * @method static Builder|Role whereCreatedAt($value)
 * @method static Builder|Role whereId($value)
 * @method static Builder|Role whereName($value)
 * @method static Builder|Role whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

    /**
     * Получние записи
     * @param string $role
     * @return Role|Builder|Model
     */
    public function roleByName(string $role): Role|Builder|Model
    {
        return self::query()->whereName($role)->first();
    }

    /**
     * Связь к сущьности User
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'role_users');
    }
}
