<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\HousingImage
 *
 * @property int $id
 * @property int $housing_id
 * @property string $path
 * @property int|null $position для сортировки
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|HousingImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingImage whereHousingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingImage wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingImage wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HousingImage extends Model
{
    use HasFactory;
}
