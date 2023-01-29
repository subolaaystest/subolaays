<?php

namespace App\Exports;

use App\Models\Order;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;


class ExportSellerOrders implements FromQuery, WithMapping, WithHeadings
{

    public function __construct($orders_ids)
    {
        $this->orders_ids = $orders_ids;
    }

    public function query()
    {
        return Order::query()->whereIn('id', $this->orders_ids);
    }

    public function map($items) : array {
        return [
            @$items->order_number,
            @$items->created_at,
            @$items->seller->name,
            @$items->buyer->name,
            @$items->coupon->name,
            @$items->coupon_discount,
            @$items->shipping_method->name,
            @$items->payment_method->name,
            @$items->final_total,
            __('translate.' . $items->status),
        ] ;
    }


    public function headings(): array
    {
        return [
            __('translate.orderNo'),
            __('translate.created_at'),
            __('translate.sellerName'),
            __('translate.client'),
            __('translate.coupon'),
            __('translate.coupon_discount'),
            __('translate.Shipping'),
            __('translate.Payment'),
            __('translate.Total'),
            __('translate.status'),
        ];
    }

    public function startRow(): int
    {
        return 5;
    }
}
