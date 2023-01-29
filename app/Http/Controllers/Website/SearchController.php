<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Services\Website\ProductService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    private ProductService $productService;

    public function __construct()
    {
        $this->productService = new ProductService();
    }

    public function searchProducts(Request $request)
    {
        return view('website.search.products',
            $this->productService->searchOnProduct(
                $request->input('search'),
                $request->input('order', 'asc'),
                $request->input('category_id'),
                $request->input('trademark_id')
            
            )
        );
    }
  
}
