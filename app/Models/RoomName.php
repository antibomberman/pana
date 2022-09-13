<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RoomName
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|RoomName newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomName newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomName query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomName whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomName whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomName whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RoomName extends Model
{
    use HasFactory;
}
