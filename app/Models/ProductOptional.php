<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductOptional
 *
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOptional newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOptional newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOptional query()
 * @mixin \Eloquent
 */
class ProductOptional extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','from','to','type','discount','price'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
