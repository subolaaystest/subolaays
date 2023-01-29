<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\BuyerCategoryTranslation
 *
 * @property int $id
 * @property int $buyer_category_id
 * @property string $locale
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategoryTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategoryTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|BuyerCategoryTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategoryTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategoryTranslation whereBuyerCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategoryTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategoryTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategoryTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategoryTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategoryTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategoryTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BuyerCategoryTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BuyerCategoryTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class BuyerCategoryTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = ['name', 'buyer_category_id', 'locale'];

}
