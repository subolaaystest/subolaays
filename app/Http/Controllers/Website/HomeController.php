<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\DealOffer;
use App\Services\Website\AdvertiseService;
use App\Services\Website\CategoryService;
use App\Services\Website\StoryService;
use App\Services\Website\ProductService;
use App\Services\Website\DealOfferService;

class HomeController extends Controller
{
    private ProductService $productService;
    private CategoryService $categoryService;
    private AdvertiseService $advertiseService;
    private StoryService $storyService;
    private DealOfferService $dealOfferService;

    public function __construct()
    {
        $this->advertiseService = new AdvertiseService();
        $this->categoryService = new CategoryService();
        $this->storyService = new StoryService();
        $this->productService = new ProductService();
        $this->dealOfferService = new DealOfferService();
    }
    public function index(){
        return view('website.home.index')->with([
            'main_advertises' => $this->advertiseService->getAllMainAdvertises(),
            'main_categories' => $this->categoryService->getAllMainCategoriesAppearOnHomePage(),
            'stories' => $this->storyService->getActiveStories(),
            'grocery_products' => $this->productService->getAllProductsOfGroceryCategory(),
            'electrons_products' => $this->productService->getAllProductsOfElectronsCategory(),
            'first_ads' => $this->advertiseService->getFirstAdvertise(),
            'second_ads' => $this->advertiseService->getsecondAdvertise(),
            'offers' =>$this->dealOfferService->getDealsOffersWithMainCategory(),
        ]);
    }
    public function getCoditions(){
        return view('website.home.conditions');
    }
}
