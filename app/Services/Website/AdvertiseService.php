<?php

namespace App\Services\Website;

use App\Models\Ad;

class AdvertiseService
{
    public function getAllMainAdvertises()
    {
        return Ad::active()->type(Ad::TYPE_MAIN)->get();
    }

    public function getFirstAdvertise(){
        return Ad::active()->type(Ad::TYPE_SUB1)->first();
    }

    public function getsecondAdvertise(){
        return Ad::active()->type(Ad::TYPE_SUB2)->first();
    }
}
