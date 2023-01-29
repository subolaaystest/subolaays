<?php

namespace App\Exports;

use App\Models\Buyer;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class ExportSellerClients implements FromQuery, WithMapping, WithHeadings
{

    public function __construct($clients_ids)
    {
        $this->clients_ids = $clients_ids;
    }

    public function query()
    {
        return Buyer::query()->whereIn('id', $this->clients_ids);
    }

    public function map($items) : array {
        return [
            @$items->buyerCategory->name,
            @$items->orders_count,
            @$items->name,
            @$items->mobile,
            @$items->email,
            @$items->address,
            __('translate.' . $items->status),
        ] ;
    }


    public function headings(): array
    {
        return [
            __('translate.MainCategory'),
            __('translate.orders_count'),
            __('translate.name'),
            __('translate.mobile'),
            __('translate.email'),
            __('translate.address'),
            __('translate.status'),
        ];
    }

    public function startRow(): int
    {
        return 5;
    }
}
