<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Bed
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Bed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bed query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bed whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bed whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bed whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bed whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Bed extends Model
{
    use HasFactory;
}
