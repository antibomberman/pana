<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\HousingComfort
 *
 * @property int $id
 * @property int $housing_id
 * @property int $comfort_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|HousingComfort newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingComfort newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingComfort query()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingComfort whereComfortId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingComfort whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingComfort whereHousingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingComfort whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingComfort whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HousingComfort extends Model
{
    use HasFactory;
}
