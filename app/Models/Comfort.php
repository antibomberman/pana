<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Comfort
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Comfort newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comfort newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comfort query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comfort whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comfort whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comfort whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comfort whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comfort whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Comfort extends Model
{
    use HasFactory;
}
