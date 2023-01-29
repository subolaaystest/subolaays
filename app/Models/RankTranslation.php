<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\RankTranslation
 *
 * @property int $id
 * @property int $rank_id
 * @property string $locale
 * @property string $name
 * @property string|null $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|RankTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RankTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|RankTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|RankTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|RankTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RankTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RankTranslation whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RankTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RankTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RankTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RankTranslation whereRankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RankTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|RankTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|RankTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class RankTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = ['name', 'details'];
}
