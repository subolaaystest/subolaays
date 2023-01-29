<?php

namespace App\Http\Controllers\Website\Coupon;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\CheckCouponRequest;
use App\Services\Website\CouponService;
use Illuminate\Http\JsonResponse;
use Cart;
use Illuminate\Support\Facades\Session;

class CheckCouponAction extends Controller
{
    protected CouponService $couponService;

    public function __construct()
    {
        $this->couponService = new CouponService();
    }

    /**
     * @param CheckCouponRequest $request
     * @return JsonResponse
     */
    public function __invoke(CheckCouponRequest $request)
    {
        $coupon = $this->couponService->getActiveCoupon(['name' => $request->input('coupon_name')]);

        $cartTotal = Cart::session(Session::getId())->getTotal();

        if (!$coupon) {
            return response()->json([
                'success' => false,
                'total' => $cartTotal,
                'message' => trans('website.the_coupon_code_is_currently_not_available'),
            ], 421);
        }

        $cartTotal = $this->couponService->calculateCostByType($coupon, $cartTotal);

        return response()->json([
            'success' => true,
            'total' => $cartTotal,
            'name' => $coupon->name,
            'id' => $coupon->id,
            'message' => trans('website.the_discount_code_has_been_activated_successfully'),
        ]);
    }

}
