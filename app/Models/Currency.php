<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;

/**
 * App\Models\Currency
 *
 * @property int $id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\CurrencyTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CurrencyTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Currency active()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|Currency onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency withTranslation()
 * @method static \Illuminate\Database\Query\Builder|Currency withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Currency withoutTrashed()
 * @mixin \Eloquent
 */
class Currency extends Model
{

    public $translatedAttributes = ['name'];

    use SoftDeletes,Translatable;
    protected $table = 'currencies';
    protected $fillable = ['status'];
    protected $hidden = ['updated_at', 'deleted_at','translations'];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

}
