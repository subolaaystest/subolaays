<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\MainCategoryTranslation
 *
 * @property int $id
 * @property int $main_category_id
 * @property string $locale
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategoryTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategoryTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|MainCategoryTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategoryTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategoryTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategoryTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategoryTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategoryTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategoryTranslation whereMainCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategoryTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategoryTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|MainCategoryTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|MainCategoryTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class MainCategoryTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = [
        'name',
        'main_category_id',
        'locale'
    ];
}
