<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Services\Website\ProductService;

class ProductController extends Controller
{
    private ProductService $productService;

    public function __construct(){
        $this->productService = new ProductService();
    }


    public function show(Product $product){
        return view('website.products.show')->with([
            'product' => $product,
            'same_products' => $this->productService->getSameProducts($product)
        ]);
    }

    public function likeProduct(Request $request){
        $toggleResult = auth()->user()->favorites()->toggle($request->product_id); //toggle method can used with many to many relations (and have a result eith attached and deatached)
        return response()->json([
            'success'=> true,
            'is_liked' => count($toggleResult['attached']) > 0
        ]);
    }

    public function getFavorites(){
        return view('website.products.favorites')->with([
            'favorites' => auth()->guard('buyer')->user()->favorites
        ]);
    }
}
