<?php

namespace App\Services\Website;

use App\Models\Order;
use App\Models\OrderProduct;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class OrderService
{

    /**
     * @param int $buyerId
     * @return Order[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getOrdersForBuyer(int $buyerId)
    {
        return Order::with(['orderProducts.product.main_category'])
            ->where('buyer_id', $buyerId)
            ->latest('id')->get();
    }

    /**
     * @param $cart
     * @param array $data
     */
    public function createNewOrder($cart, array $data)
    {
        $order = Order::create(Arr::only($data, ['order_number', 'buyer_id', 'final_total',
            'sub_total', 'coupon_id','coupon_discount']));

        $cartContent = Arr::get($data, 'cart_content');

        $orderProductsData = [];

        foreach ($cartContent->toArray() as $cartItem) {

            $orderProductsData[] = [
                'order_id' => $order->id ?? 2,
                'product_id' => $cartItem['id'],
                'seller_id' => $cartItem['attributes']['seller_id'],
                'quantity' => $cartItem['quantity'],
                'price' => $cartItem['price'],
                'created_at' => Carbon::now()->toDateString(),
            ];
        }

        DB::table((new OrderProduct())->getTable())->insert($orderProductsData);

        $cart->clear();
    }
}
