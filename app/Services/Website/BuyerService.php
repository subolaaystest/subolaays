<?php

namespace App\Services\Website;

use App\Models\Buyer;
use App\Models\BuyerCategory;
use App\Models\BuyerCategoryTranslation;
use App\Models\MainCategory;
use App\Models\MainCategoryTranslation;
use Illuminate\Database\Eloquent\Model;

class BuyerService
{

    public function getBuyerCategory(){
        return BuyerCategory::with('translations')->active()->get();
    }

    public function createOrUpdateBuyer(array $data , ?int $buyer_id = null): Buyer
    {
        $buyer = Buyer::updateOrCreate(['id'=> $buyer_id], $data);

        if(isset($data['other_buyer_category'])) {
            $this->createOtherBuyerCategory($data['other_buyer_category_text'], $buyer);
        }

        if(isset($data['main_category'])){
            $buyer->buyerMainCategory()->attach(array_values($data['main_category']));
        }

        if(isset($data['other_main_category'])) {
            $this->createOtherMainCategory($data['other_main_category_text'], $buyer);
        }

        return $buyer;
    }

    /**
     * @param $other_buyer_category
     * @param Buyer $buyer
     * @return void
     */
    public function createOtherBuyerCategory($other_buyer_category, Buyer $buyer): void
    {
        $buyer_category = BuyerCategory::create([
            'status' => 'not_active'
        ]);
        BuyerCategoryTranslation::create([
            'name' => $other_buyer_category,
            'buyer_category_id' => $buyer_category->id,
            'locale' => 'ar'
        ]);
        $buyer->update([
            'buyer_category_id' => $buyer_category->id
        ]);
    }


    /**
     * @param $other_main_category
     * @param Model|Buyer $buyer
     * @return void
     */
    public function createOtherMainCategory($other_main_category, Model|Buyer $buyer): void
    {
        $main_category = MainCategory::create([
            'status' => 'under_process'
        ]);
        MainCategoryTranslation::create([
            'main_category_id' => $main_category->id,
            'name' => $other_main_category,
            'locale' => 'ar'
        ]);
        $buyer->buyerMainCategory()->attach($main_category);
    }
}
