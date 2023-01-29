<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Follower
 *
 * @property int $id
 * @property int $follower_id
 * @property int $followed_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Follower newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Follower newQuery()
 * @method static \Illuminate\Database\Query\Builder|Follower onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Follower query()
 * @method static \Illuminate\Database\Eloquent\Builder|Follower whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Follower whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Follower whereFollowedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Follower whereFollowerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Follower whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Follower whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Follower withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Follower withoutTrashed()
 * @mixin \Eloquent
 */
class Follower extends Model
{

    use SoftDeletes;
    protected $fillable = ['follower_id', 'followed_id'];
    protected $guarded = [];
    protected  $with = ['user'];
    protected $hidden = ['updated_at'];


    // public function user()
    // {
    //     return $this->belongsTo(\App\Models\User::class, 'follower_id')->withTrashed();
    // }


    // public function follower()
    // {
    //     return $this->belongsTo(\App\Models\User::class, 'follower_id')->withTrashed();
    // }


    // public function followed()
    // {
    //     return $this->belongsTo(\App\Models\User::class,'followed_id')->withTrashed();
    // }


}
