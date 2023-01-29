<?php

namespace App\Services\Website;
use App\Models\Trademark;

class TrademarkService
{
    public function getAllTrademarks()
    {
        return Trademark::with('translations')->active()->get();
    }
}
