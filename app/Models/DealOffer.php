<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\DealOffer
 *
 * @property int $id
 * @property int|null $deal_id
 * @property int $seller_id
 * @property string|null $shipping_time
 * @property int|null $shipping_method_id
 * @property float|null $total_price
 * @property string|null $notes
 * @property int|null $coupon_id
 * @property int|null $payment_method_id
 * @property float|null $final_amount
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Coupon|null $coupon
 * @property-read \App\Models\Deal|null $deal
 * @property-read \App\Models\PaymentMethod|null $payment_method
 * @property-read \App\Models\Seller|null $seller
 * @property-read \App\Models\ShippingMethod|null $shipping_method
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer newQuery()
 * @method static \Illuminate\Database\Query\Builder|DealOffer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer query()
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer whereDealId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer whereFinalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer whereShippingMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer whereShippingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealOffer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|DealOffer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|DealOffer withoutTrashed()
 * @mixin \Eloquent
 */
class DealOffer extends Model
{

  use SoftDeletes;
  protected $table = 'deals_offers';
  protected $hidden = ['updated_at', 'deleted_at'];
  protected $fillable = ['deal_id', 'seller_id', 'shipping_time', 'shipping_method_id', 'total_price', 'notes', 'coupon_id', 'payment_method_id', 'final_amount'];
  protected $with = ['deal', 'seller', 'shipping_method', 'coupon', 'payment_method'];


  public function deal()
  {
      return $this->belongsTo(Deal::class)->withTrashed();
  }

  public function seller()
  {
      return $this->belongsTo(Seller::class)->withTrashed();
  }

  public function shipping_method()
  {
      return $this->belongsTo(ShippingMethod::class)->withTrashed();
  }

  public function coupon()
  {
      return $this->belongsTo(Coupon::class)->withTrashed();
  }

  public function payment_method()
  {
      return $this->belongsTo(PaymentMethod::class)->withTrashed();
  }


}
