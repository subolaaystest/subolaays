<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\BuyerAddress
 *
 * @property int $id
 * @property int $buyer_id
 * @property string|null $address
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $place_description
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Buyer|null $buyer
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerAddress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerAddress newQuery()
 * @method static \Illuminate\Database\Query\Builder|BuyerAddress onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerAddress query()
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerAddress whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerAddress whereBuyerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerAddress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerAddress whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerAddress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerAddress whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerAddress whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerAddress whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerAddress wherePlaceDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerAddress whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BuyerAddress withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BuyerAddress withoutTrashed()
 * @mixin \Eloquent
 */
class BuyerAddress extends Model
{

    use SoftDeletes;
    protected $table = 'buyers_addresses';
    protected $fillable = ['buyer_id', 'address', 'latitude', 'longitude', 'place_description', 'note'];
    protected $hidden = ['updated_at', 'deleted_at'];

    public function buyer()
    {
        return $this->belongsTo(Buyer::class)->withTrashed();
    }

}
