<?php

namespace App\Models;
use App\Models\Product;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\MainCategory
 *
 * @method static withTranslation()
 * @property int $id
 * @property string $appear_on_homepage
 * @property int $created_by
 * @property string $image
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Product[] $products
 * @property-read int|null $products_count
 * @property-read \App\Models\MainCategoryTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MainCategoryTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory active()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory appearOnHomepage()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|MainCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory translated()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory whereAppearOnHomepage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|MainCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|MainCategory withoutTrashed()
 * @mixin \Eloquent
 */
class MainCategory extends Model
{

    public $translatedAttributes = ['name'];

    use SoftDeletes,Translatable;
    protected $table = 'main_categories';
    protected $fillable = ['image', 'status'];
    protected $hidden = ['updated_at', 'deleted_at','translations'];


    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function products()
    {
        return $this->hasMany(Product::class)->latest('id');
    }

    public function scopeAppearOnHomepage($query)
    {
        return $query->where('appear_on_homepage', 'yes');
    }

    /**
     * =================
     * Attributes
     * =================
     *
     */
    public function getImageAttribute($value): string
    {
        return Storage::url($value);
    }
}
