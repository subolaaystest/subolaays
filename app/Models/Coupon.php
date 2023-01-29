<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Order;

/**
 * App\Models\Coupon
 *
 * @property int $id
 * @property int $seller_id
 * @property string $name
 * @property string $start
 * @property string $end
 * @property string|null $description
 * @property float $discount
 * @property string|null $coupon_type
 * @property string|null $free_shipping
 * @property string|null $exclude_offer_products
 * @property int $minimum_purchases
 * @property int $all_frequency_use
 * @property int $buyer_frequency_use
 * @property string $status active/not_active
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read mixed $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Order[] $orders
 * @property-read int|null $orders_count
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon active()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Query\Builder|Coupon onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereAllFrequencyUse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereBuyerFrequencyUse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCouponType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereExcludeOfferProducts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereFreeShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereMinimumPurchases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Coupon withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Coupon withoutTrashed()
 * @mixin \Eloquent
 */
class Coupon extends Model
{
    use SoftDeletes;

    protected $table = 'coupons';
    protected $fillable = ['name', 'start', 'end', 'description', 'discount', 'coupon_type', 'minimum_purchases', 'all_frequency_use', 'buyer_frequency_use', 'status'];
    protected $hidden = ['updated_at', 'deleted_at'];
    protected $appends = ['clients_count'];

    public const TYPE_FIXED = 'fixed';
    public const TYPE_PERCENT = 'percent';

    public function getClientsCountAttribute()
    {
        return Order::where('coupon_id', $this->id)->groupBy('buyer_id')->count();
    }


    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }


    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * @return bool
     */
    public function isTypeFixed()
    {
        return $this->coupon_type == self::TYPE_FIXED;
    }

    /**
     * @return bool
     */
    public function isTypePercent()
    {
        return $this->coupon_type == self::TYPE_PERCENT;
    }

    /**
     * @return float|int|null
     */
    public function getDiscountByType()
    {
        if ($this->isTypeFixed()) {
            return $this->discount;
        }
        if ($this->isTypePercent()) {
            return (1 - ($this->discount / 100));
        }
        return null;
    }
}
