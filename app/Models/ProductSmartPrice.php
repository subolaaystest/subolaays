<?php
namespace App\Models;

use Auth;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\ProductSmartPrice
 *
 * @property int $id
 * @property int $product_id
 * @property int|null $from_quantity
 * @property int|null $to_quantity
 * @property float|null $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSmartPrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSmartPrice newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProductSmartPrice onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSmartPrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSmartPrice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSmartPrice whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSmartPrice whereFromQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSmartPrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSmartPrice wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSmartPrice whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSmartPrice whereToQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSmartPrice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ProductSmartPrice withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ProductSmartPrice withoutTrashed()
 * @mixin \Eloquent
 */
class ProductSmartPrice extends Model
{
    use SoftDeletes;

    protected $table = 'products_smarts_prices';
    protected $fillable = ['product_id', 'from_quantity', 'to_quantity', 'price'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

}

