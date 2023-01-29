<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\SellerStorage
 *
 * @property int $id
 * @property int $seller_id
 * @property string|null $storage_type
 * @property string|null $name
 * @property int|null $city_id
 * @property string|null $address
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $postal_code
 * @property string|null $street
 * @property string|null $building
 * @property string|null $phone
 * @property string|null $mobile
 * @property string|null $whatsapp
 * @property string|null $preparing_time
 * @property int $is_default
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\City|null $city
 * @property-read \App\Models\Seller|null $seller
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage newQuery()
 * @method static \Illuminate\Database\Query\Builder|SellerStorage onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage query()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereBuilding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage wherePreparingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereStorageType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerStorage whereWhatsapp($value)
 * @method static \Illuminate\Database\Query\Builder|SellerStorage withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SellerStorage withoutTrashed()
 * @mixin \Eloquent
 */
class SellerStorage extends Model
{

  use SoftDeletes;
  protected $table = 'sellers_storages';
  protected $hidden = ['updated_at', 'deleted_at'];
  protected $fillable = ['seller_id', 'storage_type_id', 'name', 'city_id', 'address', 'latitude', 'longitude', 'postal_code',
                         'status', 'building', 'phone', 'mobile', 'whatsapp', 'preparing_time', 'is_default'];
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
