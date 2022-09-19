<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\VideoShow
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShow newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShow newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShow query()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShow whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShow whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoShow whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class VideoShow extends Model
{
    use HasFactory;

    protected $fillable = ['housing_video_id','ip','agent','count'];
}
