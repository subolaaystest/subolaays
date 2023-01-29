<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\BlogTranslation
 *
 * @property int $id
 * @property int $blog_id
 * @property string $locale
 * @property string $title
 * @property string|null $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|BlogTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereBlogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BlogTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BlogTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class BlogTranslation extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'details'];
    protected $hidden = ['updated_at', 'deleted_at'];
}
