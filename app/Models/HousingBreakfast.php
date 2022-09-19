<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\HousingBreakfast
 *
 * @property int $id
 * @property int $housing_id
 * @property int $breakfast_id
 * @property float|null $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HousingBreakfast newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingBreakfast newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingBreakfast query()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingBreakfast whereBreakfastId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingBreakfast whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingBreakfast whereHousingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingBreakfast whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingBreakfast wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingBreakfast whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Breakfast $breakfast
 * @method static \Database\Factories\HousingBreakfastFactory factory(...$parameters)
 */
class HousingBreakfast extends Model
{
    use HasFactory;

    protected $fillable = ['housing_id','breakfast_id','price'];

    public function breakfast():BelongsTo
    {
        return  $this->belongsTo(Breakfast::class);
    }
}
