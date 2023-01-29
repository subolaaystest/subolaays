<?php

namespace App\Models;
use App\Models\Offer;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Notification
 *
 * @property int $id
 * @property int $from_admin_dashboard
 * @property string|null $random_key
 * @property int $user_id
 * @property string|null $user_type
 * @property string $tag
 * @property int $tag_id
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Query\Builder|Notification onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereFromAdminDashboard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereRandomKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUserType($value)
 * @method static \Illuminate\Database\Query\Builder|Notification withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Notification withoutTrashed()
 * @mixin \Eloquent
 */
class Notification extends Model
{

    use SoftDeletes ;
    public $table = 'notifications';
    protected $fillable = ['user_id', 'message', 'created_at'];
    protected $hidden = ['updated_at','deleted_at'];



}
