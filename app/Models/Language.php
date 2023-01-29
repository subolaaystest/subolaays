<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Language
 *
 * @property int $id
 * @property string $lang
 * @property string $flag
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\LanguageTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LanguageTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Language listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|Language onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Language orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Language orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Language orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|Language translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Language translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language withTranslation()
 * @method static \Illuminate\Database\Query\Builder|Language withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Language withoutTrashed()
 * @mixin \Eloquent
 */
class Language extends Model
{
    use SoftDeletes, Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = ['lang','flag'];
//    protected $appends = ['current_name'];


    public function getFlagAttribute($flag){
        return url($flag);
    }

//    public function getCurrentNameAttribute($name){
//        $id = Language::where('lang',app()->getLocale())->pluck('id')->first();
//        //return $id;
//        $name = LanguageTranslation::where('language_id',$id)->where('locale',app()->getLocale())->pluck('name')->first();
//        return $name;
//    }


}
