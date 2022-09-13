<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RoomBed
 *
 * @property int $id
 * @property int $room_id
 * @property int $count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|RoomBed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomBed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomBed query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomBed whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomBed whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomBed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomBed whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomBed whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RoomBed extends Model
{
    use HasFactory;
}
