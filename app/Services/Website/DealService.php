<?php

namespace App\Services\Website;

use App\Models\Deal;
use App\Models\Photo;
use App\Models\Product;
use App\Models\ProductTranslation;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DealService
{
    public function getDealsWithProductsOfGroceryCategory(?int $categoryId)
    {
        return Deal::when($categoryId === Deal::GROCERY_CATEGORY_ID, function ($query) {
            $query->grocery();
        })->with('products')->has('products')->paginate(8);
    }

    /**
     * @param int|null $id
     * @return Deal|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function getDealWithProductsById(int|null $id)
    {
        return Deal::whereId($id)->with('products')->first();
    }

    public function addProductInDeal(Deal $deal, array $data)
    {

        $product = Product::updateOrCreate(['id' => Arr::get($data, 'product_id'), 'deal_id' => $deal->id], [
            'main_category_id' => Arr::get($data, 'main_category_id'),
            'sub_category_id' => Arr::get($data, 'sub_category_id'),
            'trademark_id' => Arr::get($data, 'trademark_id'),
            'quantity_available' => Arr::get($data, 'quantity_available'),
            'price' => Arr::get($data, 'price') / Arr::get($data, 'quantity_available'),
            'type' => 'deals',
            'seller_id' => auth()->guard('buyer')->user()->id,
            'approve_status' => 'waiting',
            'status' => 'not_active',
            'sku' => rand(100000, 999999),
            'size' => Arr::get($data, 'size')
        ]);

        ProductTranslation::updateOrCreate(['product_id' => $product->id, 'locale' => 'en'], [
            'name' => Arr::get($data, 'name_en')
        ]);

        ProductTranslation::updateOrCreate(['product_id' => $product->id, 'locale' => 'ar'], [
            'name' => Arr::get($data, 'name_ar')
        ]);

        if ($product->photos->isNotEmpty()) {
            foreach (Arr::get($data, 'image', []) as $key => $image) {
                $newImage = $image->store('products');
                $photo = $product->photos->where('id', $key)->first() ?? null;
                if ($photo) {
                    $photoName = Str::after($photo->image, 'storage/');
                    Storage::delete($photoName);
                    $photo->image = $newImage;
                    $photo->save();
                }
            }
        } else {
            foreach (Arr::get($data, 'image', []) as $key => $image) {
                Photo::create([
                    'product_id' => $product->id,
                    'image' => $image->store('products'),
                    'type' => 'product',
                    'status' => 'active',
                    'is_main' => $key == 0
                ]);
            }
        }
    }


    public function updateDeal(Deal $deal, array $data)
    {
        $deal->update($data);
    }
}

