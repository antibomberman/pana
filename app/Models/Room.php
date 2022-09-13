<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Room
 *
 * @property int $id
 * @property int $housing_id
 * @property int $room_type_id
 * @property int $room_name_id
 * @property float|null $size размер м²
 * @property float $base_price Базовая цена
 * @property int $smoking Курение
 * @property int $disabled_people Номер предназначен для инвалидов
 * @property int $max_people Сколько гостей могут остановиться в этой комнате
 * @property int|null $count_copy Количество номеров (этого типа)
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Room newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Room newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Room query()
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereBasePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereCountCopy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereDisabledPeople($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereHousingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereMaxPeople($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereRoomNameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereRoomTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereSmoking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Room extends Model
{
    use HasFactory;
}
