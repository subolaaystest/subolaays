<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\AdTranslation
 *
 * @property int $id
 * @property int $ad_id
 * @property string $locale
 * @property string|null $title
 * @property string|null $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|AdTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|AdTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AdTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|AdTranslation whereAdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdTranslation whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdTranslation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|AdTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|AdTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class AdTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = ['title', 'details'];
    protected $hidden = ['updated_at', 'deleted_at'];

}
