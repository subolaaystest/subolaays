<?php

namespace App\Exports;

use App\Models\Product;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;


class ExportSellerProduct implements FromQuery, WithMapping, WithHeadings
{

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function query()
    {
        return Product::query()->where('id', $this->id);
    }

    public function map($items) : array {
        return [
            @$items->name,
            @$items->description,
            @$items->type,
            @$items->seller->name,
            @$items->main_category->name,
            @$items->sub_category->name,
            @$items->price,
            @$items->discount_percentage,
            @$items->offer_price,
            @$items->sku,
            @$items->views_count,
            @$items->quantity_available,
            @$items->quantity_sell,
        ] ;
    }


    public function headings(): array
    {
        return [
            __('translate.name'),
            __('translate.ProductsDetails'),
            __('translate.type'),
            __('translate.sellerName'),
            __('translate.MainCategory'),
            __('translate.SubCategory'),
            __('translate.price'),
            __('translate.discountPercentage'),
            __('translate.offer_price'),
            'sku',
            __('translate.views_count'),
            __('translate.quantity_available'),
            __('translate.quantity_sell'),
        ];
    }

    public function startRow(): int
    {
        return 5;
    }
}
