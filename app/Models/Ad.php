<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\Ad
 *
 * @property int $id
 * @property string|null $type
 * @property string $image
 * @property string|null $url
 * @property string $status
 * @property int $visit
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\AdTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AdTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Ad active()
 * @method static \Illuminate\Database\Eloquent\Builder|Ad listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Ad newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ad newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ad notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|Ad onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Ad orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Ad orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Ad orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Ad query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ad translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Ad translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Ad type(string $type)
 * @method static \Illuminate\Database\Eloquent\Builder|Ad whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ad whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ad whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ad whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ad whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ad whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Ad whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Ad whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ad whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ad whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ad whereVisit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ad withTranslation()
 * @method static \Illuminate\Database\Query\Builder|Ad withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Ad withoutTrashed()
 * @mixin \Eloquent
 */
class Ad extends Model
{

    use SoftDeletes,Translatable;
    public $translatedAttributes = ['title', 'details'];
    protected $table = 'ads';
    protected $fillable = ['image', 'url'];
    protected $hidden = ['updated_at', 'deleted_at', 'translations'];
    public const TYPE_MAIN = 'main';
    public const TYPE_SUB1 = 'sub1';
    public const TYPE_SUB2 = 'sub2';

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeType($query, string $type)
    {
        return $query->where('type', $type);
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
