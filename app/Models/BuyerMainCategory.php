<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\BuyerMainCategory
 *
 * @property int $id
 * @property int $buyer_id
 * @property int|null $main_category_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Buyer|null $buyer
 * @property-read \App\Models\MainCategory|null $main_category
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerMainCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerMainCategory newQuery()
 * @method static \Illuminate\Database\Query\Builder|BuyerMainCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerMainCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerMainCategory whereBuyerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerMainCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerMainCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerMainCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerMainCategory whereMainCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuyerMainCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BuyerMainCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BuyerMainCategory withoutTrashed()
 * @mixin \Eloquent
 */
class BuyerMainCategory extends Model
{

  use SoftDeletes;
  protected $table = 'buyers_main_categories';
  protected $hidden = ['updated_at', 'deleted_at'];
  protected $fillable = ['buyer_id', 'main_category_id'];
  protected $with = ['buyer', 'main_category'];

  public function buyer()
  {
      return $this->belongsTo(Buyer::class)->withTrashed();
  }

  public function main_category()
  {
      return $this->belongsTo(MainCategory::class)->withTrashed();
  }


}
