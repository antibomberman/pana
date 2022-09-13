<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ReviewAudio
 *
 * @property int $id
 * @property int $review_id
 * @property int $status
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewAudio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewAudio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewAudio query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewAudio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewAudio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewAudio wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewAudio whereReviewId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewAudio whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReviewAudio whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ReviewAudio extends Model
{
    use HasFactory;
}
