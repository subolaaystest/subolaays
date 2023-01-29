<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Tax
 *
 * @property int $id
 * @property int|null $seller_id
 * @property float|null $tax_percent
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Seller|null $seller
 * @method static \Illuminate\Database\Eloquent\Builder|Tax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax newQuery()
 * @method static \Illuminate\Database\Query\Builder|Tax onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereTaxPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Tax withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Tax withoutTrashed()
 * @mixin \Eloquent
 */
class Tax extends Model
{

    use SoftDeletes;
    protected $table = 'taxs';
    protected $fillable = ['seller_id', 'tax_percent', 'status'];
    protected $hidden = ['updated_at', 'deleted_at'];
    protected $with = ["seller"];

    public function seller()
    {
        return $this->belongsTo(Seller::class)->withTrashed();
    }

}
