<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\CurrencyTranslation
 *
 * @property int $id
 * @property int $currency_id
 * @property string $locale
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|CurrencyTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|CurrencyTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CurrencyTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class CurrencyTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = ['name'];
}
