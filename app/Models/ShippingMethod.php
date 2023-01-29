<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;

use App\Models\ShippingMethodCountry;
use App\Models\ShippingMethodCategory;

/**
 * App\Models\ShippingMethod
 *
 * @property int $id
 * @property string|null $image
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\ShippingMethodTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ShippingMethodTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod active()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|ShippingMethod onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod translated()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod withTranslation()
 * @method static \Illuminate\Database\Query\Builder|ShippingMethod withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ShippingMethod withoutTrashed()
 * @mixin \Eloquent
 */
class ShippingMethod extends Model
{

    public $translatedAttributes = ['name'];

    use SoftDeletes,Translatable;
    protected $table = 'shipping_methods';
    protected $fillable = ['image'];
    protected $hidden = ['updated_at', 'deleted_at','translations'];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function getImageAttribute($value)
    {
        return url('uploads/shipping_methods/' . $value);
    }

}
