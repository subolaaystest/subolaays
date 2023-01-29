<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\OrderProduct
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property int $quantity
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct newQuery()
 * @method static \Illuminate\Database\Query\Builder|OrderProduct onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|OrderProduct withTrashed()
 * @method static \Illuminate\Database\Query\Builder|OrderProduct withoutTrashed()
 * @mixin \Eloquent
 */
class OrderProduct extends Model
{

    use SoftDeletes;

    protected $table = 'order_products';
    protected $hidden = ['updated_at', 'deleted_at'];
    protected $fillable = ['order_id', 'seller_id', 'product_id', 'quantity', 'price'];
    protected $with = ['product'];


    public function product()
    {
        return $this->belongsTo(Product::class)->withTrashed();
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }


}
