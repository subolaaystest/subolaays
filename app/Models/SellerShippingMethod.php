<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\SellerShippingMethod
 *
 * @property int $id
 * @property int|null $seller_id
 * @property int|null $shipping_method_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Seller|null $seller
 * @property-read \App\Models\ShippingMethod|null $shipping_method
 * @method static \Illuminate\Database\Eloquent\Builder|SellerShippingMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerShippingMethod newQuery()
 * @method static \Illuminate\Database\Query\Builder|SellerShippingMethod onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerShippingMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerShippingMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerShippingMethod whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerShippingMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerShippingMethod whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerShippingMethod whereShippingMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerShippingMethod whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|SellerShippingMethod withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SellerShippingMethod withoutTrashed()
 * @mixin \Eloquent
 */
class SellerShippingMethod extends Model
{

  use SoftDeletes;
  protected $table = 'sellers_shipping_methods';
  protected $hidden = ['updated_at', 'deleted_at'];
  protected $fillable = ['seller_id', 'shipping_method_id'];
  protected $with = ['seller', 'shipping_method'];

  public function seller()
  {
      return $this->belongsTo(Seller::class)->withTrashed();
  }

  public function shipping_method()
  {
      return $this->belongsTo(ShippingMethod::class)->withTrashed();
  }


}
