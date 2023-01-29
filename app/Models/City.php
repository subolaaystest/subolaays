<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\City
 *
 * @property int $id
 * @property int $country_id
 * @property string $status
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Country|null $country
 * @property-read \App\Models\CityTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CityTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|City active()
 * @method static \Illuminate\Database\Eloquent\Builder|City listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|City onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|City orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|City orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|City orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City translated()
 * @method static \Illuminate\Database\Eloquent\Builder|City translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|City whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City withTranslation()
 * @method static \Illuminate\Database\Query\Builder|City withTrashed()
 * @method static \Illuminate\Database\Query\Builder|City withoutTrashed()
 * @mixin \Eloquent
 */
class City extends Model
{
    use SoftDeletes,Translatable;
    protected $table = 'cities';
    public $translatedAttributes = ['name'];
    protected $fillable = ['country_id', 'status'];
    protected $hidden = ['updated_at', 'deleted_at', 'translations'];


    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id')->withTrashed();
    }


}
