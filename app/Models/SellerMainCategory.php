<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\SellerMainCategory
 *
 * @property int $id
 * @property int $seller_id
 * @property int|null $main_category_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\MainCategory|null $main_category
 * @property-read \App\Models\Seller|null $seller
 * @method static \Illuminate\Database\Eloquent\Builder|SellerMainCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerMainCategory newQuery()
 * @method static \Illuminate\Database\Query\Builder|SellerMainCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerMainCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerMainCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerMainCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerMainCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerMainCategory whereMainCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerMainCategory whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerMainCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|SellerMainCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SellerMainCategory withoutTrashed()
 * @mixin \Eloquent
 */
class SellerMainCategory extends Model
{

  use SoftDeletes;
  protected $table = 'sellers_main_categories';
  protected $hidden = ['updated_at', 'deleted_at'];
  protected $fillable = ['seller_id', 'main_category_id'];
  protected $with = ['seller', 'main_category'];

  public function seller()
  {
      return $this->belongsTo(Seller::class)->withTrashed();
  }

  public function main_category()
  {
      return $this->belongsTo(MainCategory::class)->withTrashed();
  }


}
