<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\Photo
 *
 * @property int $id
 * @property int|null $product_id
 * @property string $image
 * @property int $is_main
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|Photo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo newQuery()
 * @method static \Illuminate\Database\Query\Builder|Photo onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereIsMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Photo withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Photo withoutTrashed()
 * @mixin \Eloquent
 */
class Photo extends Model
{

    use SoftDeletes;
    protected $table = 'photos';
    protected $hidden = ['updated_at', 'deleted_at'];
    protected $fillable = ['product_id', 'image', 'is_main'];

    // public function getImageAttribute($value)
    // {
    //     return url('uploads/photos/' . $value);
    // }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function getImageAttribute($value): string
    {
        return Storage::url($value);
    }

}
