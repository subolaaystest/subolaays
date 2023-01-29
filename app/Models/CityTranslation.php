<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\CityTranslation
 *
 * @property int $id
 * @property int $city_id
 * @property string $locale
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CityTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CityTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|CityTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CityTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|CityTranslation whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CityTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CityTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CityTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CityTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CityTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CityTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|CityTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CityTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class CityTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = ['name'];

}
