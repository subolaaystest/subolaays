<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\BankTranslation
 *
 * @property int $id
 * @property int $bank_id
 * @property string $locale
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BankTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|BankTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BankTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|BankTranslation whereBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BankTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BankTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class BankTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = ['name'];
}
