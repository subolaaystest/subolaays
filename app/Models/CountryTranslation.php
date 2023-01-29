<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\CountryTranslation
 *
 * @property int $id
 * @property int $country_id
 * @property string $locale
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|CountryTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTranslation whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|CountryTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CountryTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class CountryTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = ['name'];
    protected $hidden = ['updated_at', 'deleted_at'];

}
