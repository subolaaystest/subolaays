<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\LanguageTranslation
 *
 * @property int $id
 * @property int $language_id
 * @property string $locale
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|LanguageTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageTranslation whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LanguageTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|LanguageTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|LanguageTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class LanguageTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = ['name'];
    
}
