<?php

namespace App\Http\Controllers\Website\Deal;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Website\ProductService;
use Illuminate\Http\JsonResponse;

class DeleteProductFromDealAction extends Controller
{
    protected ProductService $productService;


    public function __construct()
    {
        $this->productService = new ProductService();
    }

    /**
     * @param Product $product
     * @return JsonResponse
     */
    public function __invoke(Product $product)
    {
        if ($product->deal->buyer_id != auth('buyer')->id()) {
            return response()->json([
                'success' => false,
                'message' => trans('website.not_found'),
            ], 421);
        }

        $this->productService->deleteProduct($product);

        return response()->json([
            'success' => true,
            'message' => trans('website.the_product_has_been_successfully_deleted'),
        ]);
    }

}
