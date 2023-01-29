<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\SellerAreaPoint
 *
 * @property int $id
 * @property int $seller_id
 * @property string|null $address
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $zone_size
 * @property int|null $city_id
 * @property string|null $district
 * @property string|null $postal_code
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\City|null $city
 * @property-read \App\Models\Seller|null $seller
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint newQuery()
 * @method static \Illuminate\Database\Query\Builder|SellerAreaPoint onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint query()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerAreaPoint whereZoneSize($value)
 * @method static \Illuminate\Database\Query\Builder|SellerAreaPoint withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SellerAreaPoint withoutTrashed()
 * @mixin \Eloquent
 */
class SellerAreaPoint extends Model
{

  use SoftDeletes;
  protected $table = 'sellers_areas_points';
  protected $hidden = ['updated_at', 'deleted_at'];
  protected $fillable = ['seller_id', 'address', 'latitude', 'longitude', 'zone_size', 'city_id', 'district', 'postal_code', 'status'];
  protected $with = ['seller'];

  public function seller()
  {
      return $this->belongsTo(Seller::class)->withTrashed();
  }


  public function city()
  {
      return $this->belongsTo(City::class)->withTrashed();
  }


}
