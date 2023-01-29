<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;


/**
 * App\Models\Deal
 *
 * @property int $id
 * @property int|null $buyer_id
 * @property string|null $deal_expired
 * @property int $seller_id
 * @property string $status active/not_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Buyer|null $buyer
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DealOffer[] $deals_offers
 * @property-read int|null $deals_offers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property-read \App\Models\Seller|null $seller
 * @method static \Illuminate\Database\Eloquent\Builder|Deal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Deal newQuery()
 * @method static \Illuminate\Database\Query\Builder|Deal onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Deal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Deal whereBuyerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deal whereDealExpired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deal whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deal whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deal whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Deal whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Deal withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Deal withoutTrashed()
 * @mixin \Eloquent
 */
class Deal extends Model
{

    use SoftDeletes;

    protected $table = 'deals';
    protected $hidden = ['updated_at', 'deleted_at'];
    protected $fillable = [
        'buyer_id', 'deal_expired', 'seller_id', 'status',
        'delivery_date', 'delivery_time', 'notes', 'buyer_address_id', 'duration_receiving_offers'
    ];
    // protected $with = ['seller', 'buyer', 'products', 'deals_offers'];
    public const GROCERY_CATEGORY_ID = 6;
    public const DEAL_STATUS_DRAFT = 'draft';
    public const DEAL_STATUS_ACTIVE = 'active';
    public const DEAL_STATUS_NOT_ACTIVE = 'not_active';

    public const ADD_PRODUCT_STEP = 0;
    public const ADDRESS_INFO_STEP = 2;

    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class);
    }

    public function scopeGrocery($query)
    {
        return $query->where('main_category_id', self::GROCERY_CATEGORY_ID);
    }

    public function buyer()
    {
        return $this->belongsTo(Buyer::class)->withTrashed();
    }


    public function seller()
    {
        return $this->belongsTo(Seller::class)->withTrashed();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function deals_offers()
    {
        return $this->hasMany(DealOffer::class);
    }

    public function getImageAttribute($value): string
    {
        return Storage::url($value);
    }

    public function isStatusDraft()
    {
        return $this->status == self::DEAL_STATUS_DRAFT;
    }


}
