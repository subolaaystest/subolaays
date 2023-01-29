<?php

namespace App\Exports;

use App\Models\Coupon;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;


class ExportSellerCoupons implements FromQuery, WithMapping, WithHeadings
{

    public function __construct($coupons_ids)
    {
        $this->coupons_ids = $coupons_ids;
    }

    public function query()
    {
        return Coupon::query()->whereIn('id', $this->coupons_ids);
    }

    public function map($items) : array {
        return [
            @$items->name,
            @$items->start,
            @$items->end,
            @$items->description,
            @$items->discount,
            __('translate.' . $items->coupon_type),
            __('translate.' . $items->free_shipping),
            @$items->minimum_purchases,
            @$items->all_frequency_use,
            @$items->buyer_frequency_use,
        ] ;
    }


    public function headings(): array
    {
        return [
            __('translate.name'),
            __('translate.start'),
            __('translate.end'),
            __('translate.description'),
            __('translate.discount'),
            __('translate.coupon_type'),
            __('translate.free_shipping'),
            __('translate.minimum_purchases'),
            __('translate.all_frequency_use'),
            __('translate.buyer_frequency_use'),
        ];
    }

    public function startRow(): int
    {
        return 5;
    }
}
