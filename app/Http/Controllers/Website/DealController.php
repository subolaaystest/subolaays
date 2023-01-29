<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\DealRequest;
use App\Services\Website\CategoryService;
use App\Services\Website\ProductService;
use App\Services\Website\TrademarkService;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Deal;
use App\Services\Website\DealService;

class DealController extends Controller
{
    private DealService $dealService;
    private CategoryService $categoryService;
    private TrademarkService $trademarkService;
    protected ProductService $productService;

    public function __construct()
    {
        $this->dealService = new DealService();
        $this->categoryService = new CategoryService();
        $this->trademarkService = new TrademarkService();
        $this->productService = new ProductService();
    }

    public function create(Request $request)
    {

        $deal = $this->dealService->getDealWithProductsById($request->input('id'));
        $product = $this->productService->getProductByIdAndDealId($request->input('product'), $request->input('id'));


        if ($deal) {
            if (!$deal->isStatusDraft() || $deal->buyer_id != auth('buyer')->id()) {
                abort(404);
            }
        }

        if ($product) {
            if ($product->deal->buyer_id != auth('buyer')->id()) {
                abort(404);
            }
        }

        if (
            ($request->input('product') && $request->input('id') && !$deal && !$product) ||
            ($request->input('id') && !$deal)
        ) {
            return redirect()->route('deals.create');
        }


        if ($product) {
            $product_info = [
                'id' => $product ?->id,
                'name_en' => $product ?->translations ?->where('locale', 'en')->first()->name ?? '',
                'name_ar' => $product ?->translations ?->where('locale', 'ar')->first()->name ?? '',
                'main_category_id' => $product ?->main_category_id,
                'sub_category_id' => $product ?->sub_category_id,
                'size' => $product ?->size,
                'trademark_id' => $product ?->trademark_id,
                'quantity_available' => $product ?->quantity_available,
                'price' =>$product->price * $product->quantity_available,
                'main_image' =>$product->main_image  ,
            ];
        }

        $photosCount = 4;
        $photos = $product ? $product->photos->take($photosCount)->toArray() : [];
        $emptyArray = array_fill(count($photos), $photosCount - count($photos), []);
        $photos = array_merge($photos, $emptyArray);
        $product_info['photos'] = $photos;


        return view('website.deals.create')->with([
            'deal' => $deal,
            'product_info' => $product_info ?? [],
            'buyer_addresses' => auth('buyer')->user()->buyerAddresses,
            'main_categories' => $this->categoryService->getAllMainCategories(),
            'sub_categories' => $this->categoryService->getSubCategories(),
            'trademarks' => $this->trademarkService->getAllTrademarks(),
        ]);
    }

    public function store(DealRequest $request)
    {

        $deal = Deal::firstOrCreate([
            'id' => $request->input('id'),
            'buyer_id' => auth()->guard('buyer')->user()->id,
            'status' => Deal::DEAL_STATUS_DRAFT,
        ]);

        /**
         * step add product
         */
        if ($request->input('step') == Deal::ADD_PRODUCT_STEP) {
            $this->dealService->addProductInDeal($deal, $request->only([
                'product_id', 'main_category_id', 'sub_category_id',
                'trademark_id', 'quantity_available', 'price',
                'size', 'name_en', 'name_ar', 'image',
            ]));
        }


        /**
         * step update data address for deal
         */
        if ($request->input('step') == Deal::ADDRESS_INFO_STEP) {
            $this->dealService->updateDeal($deal, array_merge(['status' => Deal::DEAL_STATUS_NOT_ACTIVE], $request->only([
                'delivery_date', 'delivery_time', 'notes', 'buyer_address_id', 'duration_receiving_offers'
            ])));
        }

        $route = $request->input('step') == Deal::ADD_PRODUCT_STEP ?
            route('deals.create', ['id' => $deal->id]) : route('deals.index');

        return response()->json([
            'success' => true,
            'route' => $route,
            'message' => 'Deal created successfully',
        ]);

    }

    public function index(Request $request)
    {
        return view('website.deals.index')->with(['deals' => $this->dealService->getDealsWithProductsOfGroceryCategory($request->category_id)]);
    }

    public function show(Product $product)
    {
        return view('website.deals.show');
    }
}
