<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\FaqTranslation
 *
 * @property int $id
 * @property int $faq_id
 * @property string $locale
 * @property string|null $question
 * @property string|null $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|FaqTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTranslation whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTranslation whereFaqId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTranslation whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|FaqTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|FaqTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class FaqTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = ['question', 'answer'];
}
