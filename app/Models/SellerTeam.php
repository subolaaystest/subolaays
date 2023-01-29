<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\SellerTeam
 *
 * @property int $id
 * @property int|null $seller_id
 * @property string|null $name
 * @property string|null $mobile
 * @property string|null $email
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Seller|null $seller
 * @method static \Illuminate\Database\Eloquent\Builder|SellerTeam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerTeam newQuery()
 * @method static \Illuminate\Database\Query\Builder|SellerTeam onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerTeam query()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerTeam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerTeam whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerTeam whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerTeam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerTeam whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerTeam whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerTeam whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerTeam whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerTeam whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|SellerTeam withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SellerTeam withoutTrashed()
 * @mixin \Eloquent
 */
class SellerTeam extends Model
{

    use SoftDeletes;
    protected $table = 'sellers_teams';
    protected $fillable = ['seller_id', 'name', 'mobile', 'email', 'status'];
    protected $hidden = ['updated_at', 'deleted_at'];
    protected $with = ["seller"];

    public function seller()
    {
        return $this->belongsTo(Seller::class)->withTrashed();
    }

}
