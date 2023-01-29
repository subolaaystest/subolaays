<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use function url;

/**
 * App\Models\Buyer
 *
 * @method static whereMobile(mixed $input)
 * @method static where(string $string, string $decryptString)
 * @property int $id
 * @property int|null $rank_id
 * @property int|null $buyer_category_id
 * @property-read int|null $orders_count
 * @property string|null $name
 * @property string|null $mobile
 * @property string|null $email
 * @property int $verified
 * @property string|null $verification_date
 * @property string|null $license
 * @property string|null $address
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $password
 * @property string|null $image_profile
 * @property string|null $whatsapp
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $instagram
 * @property string|null $tiktok
 * @property string|null $remember_token
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\MainCategory|null $buyer_category
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $favorites
 * @property-read int|null $favorites_count
 * @property-read mixed $orders_cost
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read \App\Models\Rank|null $rank
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer newQuery()
 * @method static \Illuminate\Database\Query\Builder|Buyer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereBuyerCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereImageProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereLicense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereOrdersCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereRankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereTiktok($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereVerificationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buyer whereWhatsapp($value)
 * @method static \Illuminate\Database\Query\Builder|Buyer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Buyer withoutTrashed()
 * @mixin \Eloquent
 */
class Buyer extends Authenticatable
{

    use Notifiable, HasApiTokens, SoftDeletes;

    protected $fillable = [
        'name', 'mobile', 'email', 'rank_id', 'buyer_category_id', 'orders_count', 'otp_code', 'verified',
        'verification_date', 'license', 'address', 'latitude', 'longitude', 'password', 'image_profile', 'whatsapp',
        'facebook', 'twitter', 'instagram', 'tiktok', 'status',
    ];

    protected $hidden = ['password', 'updated_at', 'deleted_at'];
    protected $appends = ["orders_cost"];


    public function getOrdersCostAttribute()
    {
        return $this->orders->sum('final_total');
    }


    public function orders()
    {
        return $this->hasMany(Order::class)->without(['seller', 'buyer']);
    }

    public function getImageProfileAttribute($value)
    {
        if ($value) {
            return url('uploads/buyers/' . $value);
        } else {
            return url('uploads/buyers/defualtUser.png');
        }
    }

    public function rank()
    {
        return $this->belongsTo(Rank::class)->withTrashed();
    }

    public function buyerAddresses()
    {
        return $this->hasMany(BuyerAddress::class);
    }

    public function buyerCategory()
    {
        return $this->belongsTo(BuyerCategory::class)->withDefault();
    }

    public function buyerMainCategory()
    {
        return $this->belongsToMany(MainCategory::class, 'buyers_main_categories')->withTrashed();
    }

    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'favorites');
    }


}
