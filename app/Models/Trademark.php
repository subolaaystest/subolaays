<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;

use App\Models\Product;
use App\Models\AdminTrademark;


/**
 * App\Models\Trademark
 *
 * @property int $id
 * @property string $type
 * @property string|null $image
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\TrademarkTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TrademarkTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark active()
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|Trademark onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark query()
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trademark withTranslation()
 * @method static \Illuminate\Database\Query\Builder|Trademark withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Trademark withoutTrashed()
 * @mixin \Eloquent
 */
class Trademark extends Model
{

    public $translatedAttributes = ['name', 'description'];

    use SoftDeletes,Translatable;
    protected $table = 'trademarks';
    protected $fillable = ['image'];
    protected $hidden = ['updated_at', 'deleted_at','translations'];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    // public function trademark_sellers()
    // {
    //     return $this->hasMany(AdminTrademark::class);
    // }


    // public function getProductsCountAttribute()
    // {
    //     return Product::where('trademark_id', $this->id)->count();
    // }


    public function getImageAttribute($value)
    {
        return url('uploads/trademarks/' . $value);
    }


}
