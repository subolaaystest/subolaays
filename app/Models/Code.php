<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Code
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $user_type
 * @property string $code
 * @property int $used
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Seller $user
 * @method static \Illuminate\Database\Eloquent\Builder|Code newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Code newQuery()
 * @method static \Illuminate\Database\Query\Builder|Code onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Code query()
 * @method static \Illuminate\Database\Eloquent\Builder|Code whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Code whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Code whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Code whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Code whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Code whereUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Code whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Code whereUserType($value)
 * @method static \Illuminate\Database\Query\Builder|Code withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Code withoutTrashed()
 * @mixin \Eloquent
 */
class Code extends Model
{
    use SoftDeletes;
    protected $table = 'codes';

    protected $fillable = [
        'user_id',
        'user_type',
        'code',
    ];

   public function user()
    {
        return $this->belongsTo(Seller::class, 'user_id')->withTrashed();
    }

}
