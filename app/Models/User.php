<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Task;
use App\Models\UserRate;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use function url;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\City|null $city
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \App\Models\Country|null $country
 * @property-read mixed $image_profile
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 * @mixin \Eloquent
 */
class User extends Authenticatable
{

    use Notifiable,HasApiTokens,SoftDeletes;
    protected $hidden = ['password', 'updated_at', 'deleted_at'];
    protected $fillable = ['id_number', 'hospital_id', 'specialty_id', 'first_name', 'mid_name', 'last_name', 'full_name', 'email', 'mobile', 'phone', 'country_id',
                           'city_id', 'address', 'zip', 'profile', 'date_of_birth', 'blood_id', 'cars_count', 'image_profile', 'password',
                           'status', 'available', 'type', 'rate'];


    public function getImageProfileAttribute($value)
    {
        if($value){
            return url('uploads/images/users/' . $value);
        }else{
            return url('uploads/images/users/defualtUser.jpg');
        }
    }


    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id')->withTrashed();
    }


    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id')->withTrashed();
    }


    public function city()
    {
        return $this->belongsTo(City::class, 'city_id')->withTrashed();
    }

}
