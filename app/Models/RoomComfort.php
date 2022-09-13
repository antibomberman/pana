<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RoomComfort
 *
 * @property int $id
 * @property int $room_id
 * @property int $comfort_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|RoomComfort newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomComfort newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomComfort query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomComfort whereComfortId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomComfort whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomComfort whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomComfort whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomComfort whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RoomComfort extends Model
{
    use HasFactory;
}
