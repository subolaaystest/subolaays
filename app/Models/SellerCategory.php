<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;

/**
 * App\Models\SellerCategory
 *
 * @property int $id
 * @property int $number_stories_required
 * @property int $number_deals_required
 * @property string|null $image
 * @property int $approve
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\SellerCategoryTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SellerCategoryTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory active()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|SellerCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory translated()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory whereApprove($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory whereNumberDealsRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory whereNumberStoriesRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerCategory withTranslation()
 * @method static \Illuminate\Database\Query\Builder|SellerCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SellerCategory withoutTrashed()
 * @mixin \Eloquent
 */
class SellerCategory extends Model
{

    public $translatedAttributes = ['name'];

    use SoftDeletes,Translatable;
    protected $table = 'sellers_categories';
    protected $fillable = ['number_stories_required', 'number_deals_required', 'image', 'status'];
    protected $hidden = ['updated_at', 'deleted_at','translations'];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function getImageAttribute($value)
    {
        return url('uploads/sellers_categories/' . $value);
    }

}
