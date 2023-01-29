<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Session;

/**
 * App\Models\Product
 *
 * @method static active()
 * @method static whereTranslationLike(string $string, string $string1)
 * @method static withTranslation()
 * @property int $id
 * @property string|null $type
 * @property int|null $deal_id
 * @property int $seller_id
 * @property int $main_category_id
 * @property int $sub_category_id
 * @property float|null $price
 * @property float|null $discount_percentage
 * @property float|null $offer_price
 * @property int|null $trademark_id
 * @property string|null $sku
 * @property int $views_count
 * @property int $quantity_available
 * @property int $quantity_sell
 * @property int|null $count_alert
 * @property int|null $minimum_order
 * @property string|null $taxable
 * @property string $approve_status
 * @property string|null $approve_time
 * @property string $status active/not_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductAttribute[] $attributes
 * @property-read int|null $attributes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Buyer[] $favorites
 * @property-read int|null $favorites_count
 * @property-read mixed $active_price
 * @property-read mixed $main_image
 * @property-read mixed $price_after_discount
 * @property-read \App\Models\MainCategory|null $main_category
 * @property-read \App\Models\Photo|null $main_photo
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductOptional[] $optionals
 * @property-read int|null $optionals_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Photo[] $photos
 * @property-read int|null $photos_count
 * @property-read \App\Models\Seller|null $seller
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductSmartPrice[] $smart_prices
 * @property-read int|null $smart_prices_count
 * @property-read \App\Models\SubCategory|null $sub_category
 * @property-read \App\Models\Trademark|null $trademark
 * @property-read \App\Models\ProductTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product electrons()
 * @method static \Illuminate\Database\Eloquent\Builder|Product grocery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Query\Builder|Product onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Product orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Product orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Product orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product story()
 * @method static \Illuminate\Database\Eloquent\Builder|Product translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Product translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereApproveStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereApproveTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCountAlert($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDealId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMainCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMinimumOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereOfferPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereQuantityAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereQuantitySell($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSubCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTaxable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTrademarkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereViewsCount($value)
 * @method static \Illuminate\Database\Query\Builder|Product withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Product withoutTrashed()
 * @mixin \Eloquent
 */
class Product extends Model
{
    use SoftDeletes, Translatable;

    protected $table = 'products';
    public $translatedAttributes = ['name', 'description'];
    protected $fillable = ['target_group', 'available_sizes', 'seller_id', 'category_id', 'price', 'offer_price', 'active_price', 'points_count',
        'quantity_available', 'trademark_id', 'country_id', 'sku', 'image', 'approve', 'views_count', 'quantity_sell', 'type',
        'main_category_id', 'sub_category_id', 'deal_id', 'approve_status', 'status', 'size'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $appends = ['active_price', 'main_image', 'price_after_discount'];


    public const TYPE_STORY = 'stories';
    public const STATUS_ACTIVE = 'active';
    public const GROCERY_CATEGORY_ID = 6;
    public const ELECTRON_CATEGORY_ID = 24;


    public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }

    public function scopeStory($query)
    {
        return $query->where('type', self::TYPE_STORY);
    }

    public function scopeGrocery($query)
    {
        return $query->where('main_category_id', self::GROCERY_CATEGORY_ID);
    }

    public function scopeElectrons($query)
    {
        return $query->where('main_category_id', self::ELECTRON_CATEGORY_ID);
    }

    public function smart_prices()
    {
        return $this->hasMany(ProductSmartPrice::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function deal()
    {
        return $this->belongsTo(Deal::class);
    }

    public function main_photo()
    {
        return $this->hasOne(Photo::class)->where('is_main', 1);
    }

    public function getMainImageAttribute()
    {
        return $this->main_photo ?->image;
    }


    public function main_category()
    {
        return $this->belongsTo(MainCategory::class)->withTrashed();
    }


    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class)->withTrashed();
    }

    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function optionals()
    {
        return $this->hasMany(ProductOptional::class);
    }


    public function getActivePriceAttribute()
    {
        if ($this->offer_price != NULL && $this->offer_price >= 1) {
            return $this->offer_price;
        } else {
            return $this->price;
        }
    }

    public function getPriceAfterDiscountAttribute()
    {
        $price = $this->discount_percentage ? $this->price * ($this->discount_percentage / 100) : $this->price;
        return calcPriceWithCurrentCurrency($price);
    }

    public function getPriceAttribute()
    {
        return calcPriceWithCurrentCurrency($this->attributes['price'] ?? 0);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id')->withTrashed();
    }


    public function trademark()
    {
        return $this->belongsTo(Trademark::class)->withTrashed();
    }

    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(Buyer::class, 'favorites');
    }


    public function hasFavorite(): bool
    {
        //todo :: cache it
        if ($this->relationLoaded('favorites')) { // if i have collection with()
            return $this->getRelation('favorites')
                ->where('id', auth('buyer') ?->id())
                ->count() > 0;
        }

        return $this->whereHas('favorites', function ($query) {
            $query->where('buyer_id', auth('buyer') ?->id())
                ->where('product_id', $this->getAttribute('id'));
        })->exists();
    }

    /**
     * @return mixed
     */
    public function getDetailsFromCart()
    {
        return Cart::session(Session::getId())->get($this->id);
    }

}

