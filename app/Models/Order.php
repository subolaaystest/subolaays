<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;


/**
 * App\Models\Order
 *
 * @property int $id
 * @property string $order_number
 * @property int $seller_id
 * @property int|null $buyer_id
 * @property int $coupon_id
 * @property float $coupon_discount
 * @property int|null $buyer_address_id
 * @property int|null $shipping_method_id
 * @property float $shipping_method_cost
 * @property int $payment_method_id
 * @property float $sub_total
 * @property float $final_total
 * @property string|null $notes
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Buyer|null $buyer
 * @property-read \App\Models\Coupon|null $coupon
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OrderProduct[] $order_products
 * @property-read int|null $order_products_count
 * @property-read \App\Models\PaymentMethod|null $payment_method
 * @property-read \App\Models\Seller|null $seller
 * @property-read \App\Models\ShippingMethod|null $shipping_method
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Query\Builder|Order onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereBuyerAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereBuyerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCouponDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereFinalTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingMethodCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Order withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Order withoutTrashed()
 * @mixin \Eloquent
 */
class Order extends Model
{

    use SoftDeletes;

    protected $table = 'orders';
    protected $hidden = ['updated_at', 'deleted_at'];
    protected $fillable = ['order_number', 'seller_id', 'buyer_id', 'coupon_id', 'coupon_discount', 'buyer_address_id', 'shipping_method_id',
        'shipping_method_cost', 'payment_method_id', 'sub_total', 'final_total', 'notes', 'status'];
    protected $with = ['seller', 'buyer', 'order_products'];

    public const STATUS_NEW = 'new';
    public const STATUS_UNDER_PREPARING = 'under_preparing';
    public const STATUS_READY = 'ready';
    public const STATUS_UNDER_DELIVERY = 'under_delivery';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_CANCELED = 'canceled';

    public const CURRENT_STATUSES = [
        self::STATUS_NEW,
        self::STATUS_UNDER_PREPARING,
        self::STATUS_READY,
        self::STATUS_UNDER_DELIVERY,
    ];

    /**
     * @param Builder $q
     * @param int $buyerId
     * @return int
     */
    public function scopeNewOrdersCount(Builder $q, int $buyerId)
    {
        return $q->where('status', '=', self::STATUS_NEW)
            ->where('buyer_id', '=', $buyerId)
            ->count();
    }

    public function buyer()
    {
        return $this->belongsTo(Buyer::class)->withTrashed();
    }


    public function seller()
    {
        return $this->belongsTo(Seller::class)->withTrashed();
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class)->withTrashed();
    }

    public function order_products()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function sellerOrderProducts()
    {
        return $this->hasMany(OrderProduct::class)->groupBy('seller_id');
    }


    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class)->withTrashed();
    }


    public function shipping_method()
    {
        return $this->belongsTo(ShippingMethod::class)->withTrashed();
    }

    /**
     * @return array
     */
    public function getProductsAndCategoriesNameByProduct()
    {
        $data = [];

        $this->orderProducts->each(function ($orderProduct) use (&$data) {
            $data['products'][$orderProduct->product_id] = $orderProduct->product->name ?? '';
            $data['categories'][$orderProduct->product->main_category_id] = $orderProduct->product->main_category->name ?? '';
        });

        return [
            'products' => collect($data['products'])->implode(' - '),
            'categories' => collect($data['categories'])->implode(' - '),
        ];
    }

    public function sumQuantityProducts()
    {
        return $this->orderProducts->sum('quantity');
    }

}
