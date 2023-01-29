<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\SellerPaymentMethod
 *
 * @property int $id
 * @property int|null $seller_id
 * @property int|null $payment_method_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\MainCategory|null $payment_method
 * @property-read \App\Models\Seller|null $seller
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPaymentMethod newQuery()
 * @method static \Illuminate\Database\Query\Builder|SellerPaymentMethod onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPaymentMethod whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPaymentMethod wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPaymentMethod whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerPaymentMethod whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|SellerPaymentMethod withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SellerPaymentMethod withoutTrashed()
 * @mixin \Eloquent
 */
class SellerPaymentMethod extends Model
{

  use SoftDeletes;
  protected $table = 'sellers_payments_methods';
  protected $hidden = ['updated_at', 'deleted_at'];
  protected $fillable = ['seller_id', 'payment_method_id'];
  protected $with = ['seller', 'payment_method'];

  public function seller()
  {
      return $this->belongsTo(Seller::class)->withTrashed();
  }

  public function payment_method()
  {
      return $this->belongsTo(MainCategory::class)->withTrashed();
  }


}
