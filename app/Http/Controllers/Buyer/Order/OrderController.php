<?php

namespace App\Http\Controllers\Buyer\Order;

use App\Models\Order;
use App\Services\Website\OrderService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    protected OrderService $orderService;

    public function __construct()
    {
        $this->orderService = new OrderService();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $orders = $this->orderService->getOrdersForBuyer(auth('buyer')->id());

        return view('website.buyer.orders.index',
            [
                'current_orders' => $orders->whereIn('status', Order::CURRENT_STATUSES),
                'completed_orders' => $orders->where('status', Order::STATUS_COMPLETED),
                'canceled_orders' => $orders->where('status', Order::STATUS_CANCELED),
            ]
        );
    }

    /**
     * @param Order $model
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Order $model)
    {
        abort_if($model->buyer_id != auth('buyer')->id(), 404);

        return view('website.buyer.orders.show',
            [
                'order' => $model->load([
                    'sellerOrderProducts.seller',
                    'orderProducts.product.main_category',
                    'orderProducts.product.sub_category',
                ]),
            ]
        );
    }

}
