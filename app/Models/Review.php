<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

/**
 * App\Models\Review
 *
 * @property int $id
 * @property int $user_id
 * @property int $housing_id
 * @property int $status
 * @property int $price
 * @property int $purity
 * @property int $staff
 * @property int $ball
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Review newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review query()
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereHousingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review wherePurity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereStaff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereUserId($value)
 * @mixin \Eloquent
 */
class Review extends Model
{
    use HasFactory;
    protected $fillable = ['housing_id','status','price','purity','staff','user_id','ball'];
    protected $hidden = ['created_at','updated_at'];

    protected function ball(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => round(($this->price + $this->purity + $this->staff) / 3),
        );
    }


}
