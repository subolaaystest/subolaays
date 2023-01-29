<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellersStoragesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sellers_storages')->delete();
        
        \DB::table('sellers_storages')->insert(array (
            0 => 
            array (
                'id' => 6,
                'seller_id' => 60,
                'storage_type' => 'مستودع رئيسي',
                'name' => 'المستودع الأول',
                'city_id' => 1,
                'address' => 'جدة - مقابل بنك الراجحي',
                'latitude' => '24.233',
                'longitude' => '43.23',
                'postal_code' => '00980',
                'street' => 'شارع الملك سلمان',
                'building' => 'المجد رقم3',
                'phone' => '0057657567',
                'mobile' => '0046456456',
                'whatsapp' => '0046456445',
                'preparing_time' => '3 ايام',
                'is_default' => 0,
                'status' => 'active',
                'created_at' => '2022-02-12 08:12:32',
                'updated_at' => '2022-02-12 08:19:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}