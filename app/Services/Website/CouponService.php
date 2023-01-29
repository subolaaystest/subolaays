<?php

namespace App\Services\Website;

use App\Models\Coupon;
use Carbon\Carbon;

class CouponService
{

    /**
     * @param array $data
     * @return Coupon|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function getActiveCoupon(array $data)
    {

        return Coupon::where($data)
            ->active()
            ->where(function ($q) {
                $q->whereDate('start', '<=', Carbon::now()->toDateString())
                    ->whereDate('end', '>=', Carbon::now()->toDateString());
            })
            ->first();
    }

    /**
     * @param Coupon $coupon
     * @param $total
     * @return float|int
     */
    public function calculateCostByType(Coupon $coupon, $total)
    {

        if ($coupon->isTypeFixed()) {
            return $total - $coupon->getDiscountByType();
        }
        if ($coupon->isTypePercent()) {
            return $total * $coupon->getDiscountByType();
        }
        return $total;
    }


}
