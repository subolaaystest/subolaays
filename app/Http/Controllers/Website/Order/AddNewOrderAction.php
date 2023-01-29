<?php

namespace App\Http\Controllers\Website\Order;

use App\Http\Controllers\Controller;
use App\Services\Website\CouponService;
use App\Services\Website\OrderService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Cart;
use Illuminate\Support\Str;

class AddNewOrderAction extends Controller
{
    protected OrderService $orderService;
    protected CouponService $couponService;

    public function __construct()
    {
        $this->orderService = new OrderService();
        $this->couponService = new CouponService();
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request)
    {
        $cart = Cart::session(Session::getId());
        $cartContent = $cart->getContent();

        if ($cart->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => trans('website.not_found'),
            ], 421);
        }

        $finalTotal = $cart->getTotal();
        $coupon = $this->couponService->getActiveCoupon([
            'id' => $request->input('coupon_id'),
            'name' => $request->input('coupon_name'),
        ]);
        if ($coupon) {
            $finalTotal = $this->couponService->calculateCostByType($coupon, $finalTotal);
        }

        $this->orderService->createNewOrder($cart, array_merge([
            'order_number' => Str::start(Str::random(4), 'order-'),
            'buyer_id' => auth()->guard('buyer')->id(),
            'sub_total' => $cart->getSubTotal(),
            'final_total' => $finalTotal,
            'cart_content' => $cartContent,
        ],
            $coupon ?  [
                'coupon_id' => $coupon->id ?? null,
                'coupon_discount' => ($cart->getSubTotal() - $finalTotal),
            ] : []
        ));

        return response()->json([
            'success' => true,
            'route' => route('orders.success'),
            'message' => trans('website.the_order_has_been_completed_successfully'),
        ]);
    }

}
