<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\CartProduct
 *
 * @property int $id
 * @property int $cart_id
 * @property int $product_id
 * @property int $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct newQuery()
 * @method static \Illuminate\Database\Query\Builder|CartProduct onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct whereCartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|CartProduct withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CartProduct withoutTrashed()
 * @mixin \Eloquent
 */
class CartProduct extends Model
{

  use SoftDeletes;
  protected $table = 'carts_products';
  protected $fillable = ['cart_id', 'product_id', 'quantity'];
  protected $hidden = ['updated_at', 'deleted_at'];
  protected $with = ['product'];


  public function product()
  {
      return $this->belongsTo(Product::class)->withTrashed();
  }


}
