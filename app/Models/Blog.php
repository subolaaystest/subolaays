<?php

namespace App\Models;
use App\Models\Category;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\Blog
 *
 * @property int $id
 * @property int $views_count
 * @property string|null $image
 * @property string $status active/not_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Photo[] $photos
 * @property-read int|null $photos_count
 * @property-read \App\Models\BlogTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BlogTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Blog active()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|Blog onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereViewsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog withTranslation()
 * @method static \Illuminate\Database\Query\Builder|Blog withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Blog withoutTrashed()
 * @mixin \Eloquent
 */
class Blog extends Model
{

    use SoftDeletes,Translatable;
    protected $table = 'blogs';
    public $translatedAttributes = ['title', 'details'];
    protected $fillable = ['views_count', 'image', 'status'];
    protected $hidden = ['updated_at', 'deleted_at', 'translations'];


    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }


    public function photos()
    {
        return $this->hasMany(Photo::class);
    }


    public function getImageAttribute($value)
    {
        return url('uploads/blogs/' . $value);
    }


}
