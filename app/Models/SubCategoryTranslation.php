<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\SubCategoryTranslation
 *
 * @property int $id
 * @property int $sub_category_id
 * @property string $locale
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategoryTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategoryTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|SubCategoryTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategoryTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategoryTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategoryTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategoryTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategoryTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategoryTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategoryTranslation whereSubCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategoryTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|SubCategoryTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SubCategoryTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class SubCategoryTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = ['name'];
}
