<?php

namespace App\Models;

use App\Models\MainCategory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;

/**
 * App\Models\StorageType
 *
 * @property int $id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\StorageTypeTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\StorageTypeTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType active()
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|StorageType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType query()
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType translated()
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageType withTranslation()
 * @method static \Illuminate\Database\Query\Builder|StorageType withTrashed()
 * @method static \Illuminate\Database\Query\Builder|StorageType withoutTrashed()
 * @mixin \Eloquent
 */
class StorageType extends Model
{

    public $translatedAttributes = ['name'];

    use SoftDeletes,Translatable;
    protected $table = 'storages_types';
    protected $fillable = ['status'];
    protected $hidden = ['updated_at', 'deleted_at','translations'];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

}
