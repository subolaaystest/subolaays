<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\StorageTypeTranslation
 *
 * @property int $id
 * @property int $storage_type_id
 * @property string $locale
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|StorageTypeTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StorageTypeTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|StorageTypeTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|StorageTypeTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|StorageTypeTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageTypeTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageTypeTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageTypeTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageTypeTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageTypeTranslation whereStorageTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageTypeTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|StorageTypeTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|StorageTypeTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class StorageTypeTranslation extends Model
{

    use SoftDeletes;
    protected $fillable = ['name'];
}
