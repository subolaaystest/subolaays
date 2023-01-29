<?php

namespace Database\Seeders;

use App\Models\ProductAttribute;
use Illuminate\Database\Seeder;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductAttribute::create([
            'product_id' => 1,
            'key' => [
                'en' => 'color',
                'ar' => 'اللون',
            ],
            'value' => [
                'en' => 'red',
                'ar' => 'أحمر',
            ],
        ]);

        ProductAttribute::create([
            'product_id' => 1,
            'key' => [
                'en' => 'color',
                'ar' => 'اللون',
            ],
            'value' => [
                'en' => 'red',
                'ar' => 'أحمر',
            ],
        ]);
        ProductAttribute::create([
            'product_id' => 29,
            'key' => [
                'en' => 'color',
                'ar' => 'اللون',
            ],
            'value' => [
                'en' => 'red',
                'ar' => 'أحمر',
            ],
        ]);

        ProductAttribute::create([
            'product_id' => 29,
            'key' => [
                'en' => 'size',
                'ar' => 'الحجم',
            ],
            'value' => [
                'en' => 'small',
                'ar' => 'صغير',
            ],
        ]);
    }
}
