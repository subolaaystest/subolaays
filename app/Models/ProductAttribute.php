<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\ProductAttribute
 *
 * @property-read array $translations
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute query()
 * @mixin \Eloquent
 */
class ProductAttribute extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['product_id', 'key', 'value'];
    public $translatable = ['key', 'value'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
