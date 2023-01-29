<?php

namespace App\Http\Controllers\Website\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\RegisterRequest;
use App\Models\Buyer;
use App\Models\BuyerCategory;
use App\Models\BuyerCategoryTranslation;
use App\Models\BuyerMainCategory;
use App\Models\MainCategory;
use App\Models\MainCategoryTranslation;
use App\Services\Website\BuyerService;
use App\Services\Website\CategoryService;
use Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    private CategoryService $categoryService;

    public function __construct(){
        $this->categoryService = new CategoryService();
        $this->buyerService = new BuyerService();
    }

    public function formRegister(){
        return view('website.auth.register')->with([
                'buyer_categories' => $this->buyerService->getBuyerCategory() ,
                'main_categories'=> $this->categoryService->getActiveMainCategories()
        ]);
    }

    public function register(RegisterRequest $request){
        $buyer = $this->buyerService->createOrUpdateBuyer($request->validated());

        Auth::guard('buyer')->login($buyer);
        return redirect()->route('home.index');
    }
}
