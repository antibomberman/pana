<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\HousingLanguage
 *
 * @property int $id
 * @property int $housing_id
 * @property int $language_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|HousingLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingLanguage whereHousingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingLanguage whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingLanguage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HousingLanguage extends Model
{
    use HasFactory;
}
