<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Cart
 *
 * @property int $id
 * @property int $buyer_id
 * @property int $seller_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Buyer|null $buyer
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CartProduct[] $cart_products
 * @property-read int|null $cart_products_count
 * @property-read mixed $total_price
 * @property-read \App\Models\Seller|null $seller
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newQuery()
 * @method static \Illuminate\Database\Query\Builder|Cart onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereBuyerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Cart withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Cart withoutTrashed()
 * @mixin \Eloquent
 */
class Cart extends Model
{

    use SoftDeletes;
    protected $table = 'cart';
    protected $fillable = ['buyer_id', 'seller_id', 'product_id', 'quantity'];
    protected $hidden = ['updated_at', 'deleted_at'];
    protected $with = ["cart_products"];
    protected $appends = ["total_price"];

    public function getTotalPriceAttribute()
    {
        $total = 0;

        $checkCarts = $this->cart_products;

        if(count($checkCarts) > 0){
            foreach($checkCarts as $one){
                $total = $total + ($one->product->active_price * $one->quantity);
            }
        }

        return $total;
    }

    public function cart_products()
    {
        return $this->hasMany(CartProduct::class);
    }



    public function buyer()
    {
        return $this->belongsTo(Buyer::class)->withTrashed();
    }


    public function seller()
    {
        return $this->belongsTo(Seller::class)->withTrashed();
    }


}
