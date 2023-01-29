<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;

/**
 * App\Models\BuyerCategory
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
 * @property-read \App\Models\BuyerCategoryTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BuyerCategoryTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory active()
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|BuyerCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory translated()
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory whereApprove($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory whereNumberDealsRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory whereNumberStoriesRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerCategory withTranslation()
 * @method static \Illuminate\Database\Query\Builder|BuyerCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BuyerCategory withoutTrashed()
 * @mixin \Eloquent
 */
class BuyerCategory extends Model
{

    public $translatedAttributes = ['name'];

    use SoftDeletes,Translatable;
    protected $table = 'buyers_categories';
    protected $fillable = ['number_stories_required', 'number_deals_required', 'image', 'status'];
    protected $hidden = ['updated_at', 'deleted_at','translations'];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function getImageAttribute($value)
    {
        return url('uploads/buyers_categories/' . $value);
    }


    //is active
    public function isActive(): bool
    {
        return $this->status === 'active';
    }

    public function isNotActive(): bool
    {
        return $this->status === 'not_active';
    }

}
