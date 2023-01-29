<?php

namespace App\Services\Website;

use App\Models\MainCategory;
use App\Models\Product;
use App\Models\Trademark;
use Illuminate\Http\Request;

class ProductService
{

    public function getAllProductsOfGroceryCategory()
    {
        return Product::with(['favorites:id', 'main_photo'])->active()->grocery()->get();
    }

    public function getAllProductsOfElectronsCategory()
    {
        return Product::with(['favorites:id', 'main_photo'])->active()->electrons()->get();
    }

    public function searchOnProduct(string $search = null, string $order, int $category_id = null, int $trademark_id = null)
    {
        $products = Product::with('favorites:id')->withTranslation()
            ->whereTranslationLike('name', '%' . $search . '%')
            ->when($category_id, function ($query, $category_id) {
                return $query->where('main_category_id', $category_id);
            })
            ->when($trademark_id, function ($query, $trademark_id) {
                return $query->where('trademark_id', $trademark_id);
            })
            ->selectRaw('* , (products.price * products.discount_percentage/100) or null as price_after_discount')
            ->orderBy('price_after_discount', $order === 'desc' ? 'desc' : 'asc')
            ->paginate(15);

        // get categories of products by pluck ids and then get categories by ids
        $category_ids = $products->pluck('main_category_id')->toArray();
        $categories = MainCategory::withTranslation()->whereIn('id', $category_ids)->get();

        // get trademarks of products by pluck ids and then get trademarks by ids
        $trademark_ids = $products->pluck('trademark_id')->toArray();
        $trademarks = Trademark::withTranslation()->whereIn('id', $trademark_ids)->get();

        return [
            'products' => $products,
            'categories' => $categories,
            'trademarks' => $trademarks
        ];
    }

    public function getSameProducts(Product $product)
    {
        return Product::where('main_category_id', $product->main_category_id)->where('id', '!=', $product->id)->get();
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();
    }

    public function getProductByIdAndDealId(int|null $productId,int|null $dealId )
    {
      return Product::whereId($productId)->whereDealId($dealId)->first();
    }
}
