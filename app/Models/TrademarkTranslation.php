<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\TrademarkTranslation
 *
 * @property int $id
 * @property int|null $trademark_id
 * @property string $locale
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|TrademarkTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrademarkTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|TrademarkTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TrademarkTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|TrademarkTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrademarkTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrademarkTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrademarkTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrademarkTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrademarkTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrademarkTranslation whereTrademarkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrademarkTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|TrademarkTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|TrademarkTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class TrademarkTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = ['name', 'description'];
}
