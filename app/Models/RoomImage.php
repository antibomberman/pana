<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\RoomImage
 *
 * @property int $id
 * @property int $room_id
 * @property string $path
 * @property int|null $position для сортировки
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RoomImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomImage wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomImage wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomImage whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomImage whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\RoomImageFactory factory(...$parameters)
 */
class RoomImage extends Model
{
    use HasFactory;

    protected $fillable = ['id','path','position','room_id'];
    protected $hidden = ['updated_at','created_at'];

    public function path(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Storage::disk('public')->url($value),
            set: fn ($value) =>  Storage::disk('public')->putFile('images'.now()->format('Y/m'),$value),
        );
    }
}
