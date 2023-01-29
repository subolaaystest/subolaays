<?php

namespace App\Models;

use App\Models\MainCategory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;

/**
 * App\Models\SubCategory
 *
 * @property int $id
 * @property int|null $main_category_id
 * @property string|null $image
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read MainCategory|null $main_category
 * @property-read \App\Models\SubCategoryTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SubCategoryTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory active()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|SubCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory translated()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereMainCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory withTranslation()
 * @method static \Illuminate\Database\Query\Builder|SubCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SubCategory withoutTrashed()
 * @mixin \Eloquent
 */
class SubCategory extends Model
{

    public $translatedAttributes = ['name'];

    use SoftDeletes,Translatable;
    protected $table = 'sub_categories';
    protected $fillable = ['main_category_id', 'image', 'status'];
    protected $hidden = ['updated_at', 'deleted_at','translations'];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function main_category()
    {
        return $this->belongsTo(MainCategory::class)->withTrashed();
    }

    public function getImageAttribute($value)
    {
        return url('uploads/sub_categories/' . $value);
    }

}
