<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



/**
 * App\Models\ProductTranslation
 *
 * @property int $id
 * @property int $product_id
 * @property string $locale
 * @property string|null $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|ProductTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ProductTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ProductTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class ProductTranslation extends Model

{

    use SoftDeletes;
    protected $fillable = ['name', 'description','product_id','locale'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function product(){
        return $this->belongsTo(Product::class);
    }

}

