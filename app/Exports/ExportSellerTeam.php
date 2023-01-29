<?php

namespace App\Exports;

use App\Models\SellerTeam;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;


class ExportSellerTeam implements FromQuery, WithMapping, WithHeadings
{

    public function __construct($teams_ids)
    {
        $this->teams_ids = $teams_ids;
    }

    public function query()
    {
        return SellerTeam::query()->whereIn('id', $this->teams_ids);
    }

    public function map($items) : array {
        return [
             @$items->name,
            @$items->mobile,
            @$items->email,
            __('translate.' . $items->status),
        ] ;
    }


    public function headings(): array
    {
        return [
            __('translate.name'),
            __('translate.mobile'),
            __('translate.email'),
            __('translate.status'),
        ];
    }

    public function startRow(): int
    {
        return 5;
    }
}
