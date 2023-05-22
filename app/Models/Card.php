<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property mixed $created_at
 * @property mixed $updated_at
 */
class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

}
