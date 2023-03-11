<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Services\Website\ProductService;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ProductController extends Controller
{
    private ProductService $productService;

    public function __construct()
    {
        $this->productService = new ProductService();
    }


    public function show(Product $product)
    {
        return view('website.products.show')->with([
            'product' => $product,
            'same_products' => $this->productService->getSameProducts($product)
        ]);
    }

    public function likeProduct(Request $request)
    {

        $toggleResult = auth()->user()->favorites()->toggle($request->product_id); //toggle method can used with many to many relations (and have a result eith attached and deatached)
        $is_liked = count($toggleResult['attached']) > 0;
        $message = trans('website.added_to_favorite_successfully');

        if (!$is_liked) {
            $message = trans('website.deleted_from_favorite_successfully');
        }

        return response()->json([
            'success' => true,
            'is_liked' => count($toggleResult['attached']) > 0,
            'deleted_product' => $request->headers->get('referer') == url(app()->getLocale().'/products/favorites'),
            'message' => $message,
            'quantity' => auth()->user()->favorites()->count(),
        ]);
    }

    public function getFavorites()
    {
        return view('website.products.favorites')->with([
            'favorites' => auth()->guard('buyer')->user()->favorites
        ]);
    }
}
