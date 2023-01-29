<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\UserAction
 *
 * @property int $id
 * @property string|null $user_type
 * @property int $user_id
 * @property string|null $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserAction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAction newQuery()
 * @method static \Illuminate\Database\Query\Builder|UserAction onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAction query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAction whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAction whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAction whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAction whereUserType($value)
 * @method static \Illuminate\Database\Query\Builder|UserAction withTrashed()
 * @method static \Illuminate\Database\Query\Builder|UserAction withoutTrashed()
 * @mixin \Eloquent
 */
class UserAction extends Model
{

    use SoftDeletes;
    protected $table = 'users_actions';
    protected $fillable = ['user_type', 'user_id', 'details'];
    protected $hidden = ['updated_at', 'deleted_at'];

}
