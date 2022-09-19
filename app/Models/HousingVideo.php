<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\HousingImage
 *
 * @property int $id
 * @property int $housing_id
 * @property string $path
 * @property int|null $position для сортировки
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
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
 * @method static \Database\Factories\HousingImageFactory factory(...$parameters)
 * @property int $user_id
 * @property int|null $main главная стр
 * @method static \Illuminate\Database\Eloquent\Builder|HousingVideo whereMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingVideo whereUserId($value)
 */
class HousingVideo extends Model
{
    use HasFactory;

    protected $fillable = ['housing_id','user_id','path','main'];


    public function path(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Storage::disk('public')->url($value),
            set: fn ($value) =>  Storage::disk('public')->putFile('videos'.now()->format('Y/m'),$value),
        );
    }
}
