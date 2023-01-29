<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Contact
 *
 * @property int $id
 * @property int $user_id
 * @property string $message_type
 * @property string|null $name
 * @property string|null $email
 * @property string|null $mobile
 * @property string $title
 * @property string $message
 * @property string|null $replay
 * @property int $read
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Query\Builder|Contact onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMessageType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereReplay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Contact withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Contact withoutTrashed()
 * @mixin \Eloquent
 */
class Contact extends Model
{

    use SoftDeletes;
    protected $fillable = ['user_id', 'message_type', 'name', 'email', 'mobile', 'title', 'message','replay', 'read'];
    protected $hidden = ['updated_at'];

}
