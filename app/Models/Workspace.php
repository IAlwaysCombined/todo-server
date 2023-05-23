<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $title
 * @property int $table_id
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
