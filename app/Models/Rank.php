<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;

/**
 * App\Models\Rank
 *
 * @property int $id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\RankTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\RankTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Rank active()
 * @method static \Illuminate\Database\Eloquent\Builder|Rank listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Rank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rank notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|Rank onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Rank orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Rank orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Rank orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Rank query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rank translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Rank translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Rank whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rank whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rank whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rank whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rank whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Rank whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Rank whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rank withTranslation()
 * @method static \Illuminate\Database\Query\Builder|Rank withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Rank withoutTrashed()
 * @mixin \Eloquent
 */
class Rank extends Model
{

    public $translatedAttributes = ['name', 'details'];

    use SoftDeletes,Translatable;
    protected $table = 'ranks';
    protected $fillable = ['status'];
    protected $hidden = ['updated_at', 'deleted_at','translations'];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

}
