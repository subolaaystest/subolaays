<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\ShippingMethodTranslation
 *
 * @property int $id
 * @property int $shipping_method_id
 * @property string $locale
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|ShippingMethodTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodTranslation whereShippingMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ShippingMethodTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ShippingMethodTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class ShippingMethodTranslation extends Model
{

    use SoftDeletes;

    protected $table = 'shipping_method_translations';
    protected $fillable = ['name'];
}
