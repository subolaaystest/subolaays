<?php

namespace App\Services\Website;



use App\Models\DealOffer;

class DealOfferService
{
    public function getDealsOffersWithMainCategory(){
        return DealOffer::with('deal.mainCategory')->wherehas('deal',function($q){
            $q->where('status','active');
        })->limit('5')->get();
    }
}
