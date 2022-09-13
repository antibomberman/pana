<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RoomImage
 *
 * @property int $id
 * @property int $room_id
 * @property string $path
 * @property int|null $position для сортировки
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
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
 */
class RoomImage extends Model
{
    use HasFactory;
}
