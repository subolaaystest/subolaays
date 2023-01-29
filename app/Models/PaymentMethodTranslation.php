<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\PaymentMethodTranslation
 *
 * @property int $id
 * @property int $payment_method_id
 * @property string $locale
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethodTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethodTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|PaymentMethodTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethodTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethodTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethodTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethodTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethodTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethodTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethodTranslation wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethodTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|PaymentMethodTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PaymentMethodTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class PaymentMethodTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = ['name'];
}
