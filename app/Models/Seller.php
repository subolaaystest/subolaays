<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use function url;

/**
 * App\Models\Seller
 *
 * @method static mobile($mobile)
 * @property int $id
 * @property int|null $seller_category_id مصنع, مستودع, مندوب
 * @property int|null $rank_id
 * @property string|null $name
 * @property string|null $mobile
 * @property string|null $email
 * @property int|null $verified
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
 * @property float|null $minimum_purchases
 * @property string|null $commercial_register_no
 * @property string|null $commercial_register_date
 * @property string|null $remember_token
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SellerMainCategory[] $main_categories
 * @property-read int|null $main_categories_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SellerPaymentMethod[] $payments_methods
 * @property-read int|null $payments_methods_count
 * @property-read \App\Models\Rank|null $rank
 * @property-read \App\Models\SellerCategory|null $seller_category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SellerShippingMethod[] $shipping_methods
 * @property-read int|null $shipping_methods_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static Builder|Seller newModelQuery()
 * @method static Builder|Seller newQuery()
 * @method static \Illuminate\Database\Query\Builder|Seller onlyTrashed()
 * @method static Builder|Seller query()
 * @method static Builder|Seller whereAddress($value)
 * @method static Builder|Seller whereCommercialRegisterDate($value)
 * @method static Builder|Seller whereCommercialRegisterNo($value)
 * @method static Builder|Seller whereCreatedAt($value)
 * @method static Builder|Seller whereDeletedAt($value)
 * @method static Builder|Seller whereEmail($value)
 * @method static Builder|Seller whereFacebook($value)
 * @method static Builder|Seller whereId($value)
 * @method static Builder|Seller whereImageProfile($value)
 * @method static Builder|Seller whereInstagram($value)
 * @method static Builder|Seller whereLatitude($value)
 * @method static Builder|Seller whereLicense($value)
 * @method static Builder|Seller whereLongitude($value)
 * @method static Builder|Seller whereMinimumPurchases($value)
 * @method static Builder|Seller whereMobile($value)
 * @method static Builder|Seller whereName($value)
 * @method static Builder|Seller wherePassword($value)
 * @method static Builder|Seller whereRankId($value)
 * @method static Builder|Seller whereRememberToken($value)
 * @method static Builder|Seller whereSellerCategoryId($value)
 * @method static Builder|Seller whereStatus($value)
 * @method static Builder|Seller whereTiktok($value)
 * @method static Builder|Seller whereTwitter($value)
 * @method static Builder|Seller whereUpdatedAt($value)
 * @method static Builder|Seller whereVerificationDate($value)
 * @method static Builder|Seller whereVerified($value)
 * @method static Builder|Seller whereWhatsapp($value)
 * @method static \Illuminate\Database\Query\Builder|Seller withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Seller withoutTrashed()
 * @mixin \Eloquent
 */
class Seller extends Authenticatable
{

    use Notifiable, HasApiTokens, SoftDeletes;


    protected $hidden = ['password', 'updated_at', 'deleted_at'];
    protected $fillable = ['latitude', 'longitude', 'mobile'];


    public function getImageProfileAttribute($value)
    {
        if($value){
            return url('uploads/sellers/' . $value);
        }else{
            return url('uploads/sellers/defualtUser.png');
        }
    }

    public function rank()
    {
        return $this->belongsTo(Rank::class)->withTrashed();
    }

    public function seller_category()
    {
        return $this->belongsTo(SellerCategory::class)->withTrashed();
    }


    public function main_categories()
    {
        return $this->hasMany(SellerMainCategory::class)->without('seller');
    }


    public function payments_methods()
    {
        return $this->hasMany(SellerPaymentMethod::class)->without('seller');
    }

    public function shipping_methods()
    {
        return $this->hasMany(SellerShippingMethod::class)->without('seller');
    }

    /**
     * ===================
     * Scoops
     * ===================
     */
    public function scopeMobile(Builder $query, $mobile): Builder
    {
        return $query->where('mobile', $mobile);
    }

}
