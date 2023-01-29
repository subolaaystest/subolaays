<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\SellerCategoryTranslation
 *
 * @property int $id
 * @property int $seller_category_id
 * @property string $locale
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategoryTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategoryTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|SellerCategoryTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategoryTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategoryTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategoryTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategoryTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategoryTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategoryTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategoryTranslation whereSellerCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategoryTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|SellerCategoryTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SellerCategoryTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class SellerCategoryTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = ['name'];

    

}
