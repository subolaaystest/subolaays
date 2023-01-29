<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;

/**
 * App\Models\Bank
 *
 * @property int $id
 * @property string $type
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\BankTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BankTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Bank active()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|Bank onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Bank query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank withTranslation()
 * @method static \Illuminate\Database\Query\Builder|Bank withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Bank withoutTrashed()
 * @mixin \Eloquent
 */
class Bank extends Model
{

    public $translatedAttributes = ['name'];
    use SoftDeletes,Translatable;
    protected $table = 'banks';
    protected $hidden = ['updated_at', 'deleted_at','translations'];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }


}
