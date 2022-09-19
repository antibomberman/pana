<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Breakfast
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Breakfast newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Breakfast newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Breakfast query()
 * @method static \Illuminate\Database\Eloquent\Builder|Breakfast whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Breakfast whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Breakfast whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Breakfast whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Breakfast whereDeletedAt($value)
 */
class Breakfast extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}
