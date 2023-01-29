<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;

/**
 * App\Models\PaymentMethod
 *
 * @property int $id
 * @property string $type
 * @property string $status
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\PaymentMethodTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PaymentMethodTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod active()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|PaymentMethod onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod translated()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod withTranslation()
 * @method static \Illuminate\Database\Query\Builder|PaymentMethod withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PaymentMethod withoutTrashed()
 * @mixin \Eloquent
 */
class PaymentMethod extends Model
{

    public $translatedAttributes = ['name'];
    use SoftDeletes,Translatable;
    protected $table = 'payments_methods';
    protected $hidden = ['updated_at', 'deleted_at','translations'];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function getImageAttribute($value)
    {
        if($value){
            return url('uploads/payments_methods/' . $value);
        }
    }


}
