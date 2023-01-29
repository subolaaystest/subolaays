<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\PermissionTranslation
 *
 * @property int $id
 * @property int $permission_id
 * @property string $locale
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation newQuery()
 * @method static \Illuminate\Database\Query\Builder|PermissionTranslation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation wherePermissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|PermissionTranslation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PermissionTranslation withoutTrashed()
 * @mixin \Eloquent
 */
class PermissionTranslation extends Model
{

    use SoftDeletes;
    protected $table='permission_translations';
    protected $fillable = ['name','permission_id','locale'];
    
}
