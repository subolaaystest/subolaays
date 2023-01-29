<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductOptional;

class ProductOptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductOptional::create([
            'product_id' => '29',
            'from' => '5',
            'to' => '100',
            'price' => '100'
        ]);
        ProductOptional::create([
            'product_id' => '29',
            'from' => '100',
            'to' => '200',
            'price' => '150'
        ]);
        ProductOptional::create([
            'product_id' => '29',
            'from' => '200',
            'to' => '300',
            'price' => '200'
        ]);
    }
}
