<?php

namespace App\Http\Controllers\SELLER\Order;

use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(Request $request)
    {

        $orderProducts = OrderProduct::whereSellerId(auth()->guard('seller')->id())->get();
        $orderIds = $orderProducts->pluck('order_id')->toArray();
        $orders = Order::whereIn('id', $orderIds);

        if (isset($request->txt)) {
            $orders = $orders->where('order_number', $request->txt);
        }

        if (isset($request->status)) {
            $orders = $orders->where('status', $request->status);
        }

        if (isset($request->from_date) && isset($request->to_date)) {
            $orders = $orders->whereBetween('created_at', [$request->from_date, $request->to_date]);
        }

        $checkSellerOrders = $orders->get();
        $allOrders = count($checkSellerOrders);
        $newOrders = $checkSellerOrders->where('status', 'new')->count();
        $under_deliveryOrders = $checkSellerOrders->where('status', 'under_delivery')->count();
        $completedOrders = $checkSellerOrders->where('status', 'completed')->count();
        $canceledOrders = $checkSellerOrders->where('status', 'canceled')->count();

        $orders = $orders->latest('id')->paginate(20);


        return view('sellers.orders.index',
            [
                'orders' => $orders,
                'allOrders' => $allOrders,
                'newOrders' => $newOrders,
                'under_deliveryOrders' => $under_deliveryOrders,
                'completedOrders' => $completedOrders,
                'canceledOrders' => $canceledOrders
            ]
        );
    }

}
