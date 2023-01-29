<?php

namespace App\Models;

use App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\DealProduct
 *
 * @property int $id
 * @property int|null $deal_id
 * @property int $product_id
 * @property int|null $quantity
 * @property float|null $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|DealProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DealProduct newQuery()
 * @method static \Illuminate\Database\Query\Builder|DealProduct onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DealProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|DealProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealProduct whereDealId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealProduct whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealProduct wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealProduct whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DealProduct whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|DealProduct withTrashed()
 * @method static \Illuminate\Database\Query\Builder|DealProduct withoutTrashed()
 * @mixin \Eloquent
 */
class DealProduct extends Model
{

  use SoftDeletes;
  protected $table = 'deals_products';
  protected $hidden = ['updated_at', 'deleted_at'];
  protected $fillable = ['deal_id', 'product_id', 'quantity', 'price'];
  protected $with = ['product'];


  public function product()
  {
      return $this->belongsTo(Product::class)->withTrashed();
  }


}
