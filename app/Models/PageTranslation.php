<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\PageTranslation
 *
 * @property int $id
 * @property int $page_id
 * @property string $locale
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PageTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PageTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|PageTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PageTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|PageTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageTranslation wherePageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageTranslation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|PageTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PageTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class PageTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = ['title', 'description'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

}

