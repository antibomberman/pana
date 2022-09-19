<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
 * @property int $max_adult_count вместимость взрослых
 * @property int $max_child_count вместимость детей
 * @property int $max_baby_count вместимость младенец
 * @property int $max_ped_count вместимость животных
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\RoomBed[] $beds
 * @property-read int|null $beds_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\RoomComfort[] $comforts
 * @property-read int|null $comforts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\RoomImage[] $images
 * @property-read int|null $images_count
 * @property-read \App\Models\RoomName $roomName
 * @property-read \App\Models\RoomType $roomType
 * @method static \Database\Factories\RoomFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereMaxAdultCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereMaxBabyCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereMaxChildCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereMaxPedCount($value)
 */
class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'housing_id','room_type_id','room_name_id',
        'size','base_price','smoking','disabled_people','max_people','count_copy',
        'max_adult_count','max_child_count','max_baby_count','max_ped_count'
    ];

    public function beds():HasMany
    {
        return  $this->hasMany(RoomBed::class);
    }
    public function comforts():HasMany
    {
        return  $this->hasMany(RoomComfort::class);
    }
    public function images():HasMany
    {
        return  $this->hasMany(RoomImage::class);
    }
    public function roomName():BelongsTo
    {
        return  $this->belongsTo(RoomName::class);
    }
    public function roomType():BelongsTo
    {
        return  $this->belongsTo(RoomType::class);
    }
}
