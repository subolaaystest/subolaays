<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellersAreasPointsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sellers_areas_points')->delete();
        
        \DB::table('sellers_areas_points')->insert(array (
            0 => 
            array (
                'id' => 1,
                'seller_id' => 60,
                'address' => 'جدة - مكتبة جرير',
                'latitude' => NULL,
                'longitude' => NULL,
                'zone_size' => '345',
                'city_id' => 1,
                'district' => 'حي السالمية1',
                'postal_code' => '909',
                'status' => 'active',
                'created_at' => '2022-01-31 03:35:38',
                'updated_at' => '2022-01-31 03:35:38',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'seller_id' => 60,
                'address' => 'جدة - بنك الراجحي المركزي',
                'latitude' => NULL,
                'longitude' => NULL,
                'zone_size' => '220',
                'city_id' => 1,
                'district' => 'مجمع التجارة الحديث',
                'postal_code' => '2100',
                'status' => 'not_active',
                'created_at' => '2022-01-31 03:37:06',
                'updated_at' => '2022-02-01 06:53:02',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'seller_id' => 60,
                'address' => '1',
                'latitude' => NULL,
                'longitude' => NULL,
                'zone_size' => '1',
                'city_id' => 1,
                'district' => 'حي السالمية1',
                'postal_code' => '1',
                'status' => 'active',
                'created_at' => '2022-02-03 03:54:47',
                'updated_at' => '2022-02-03 16:39:01',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'seller_id' => 60,
                'address' => 'القصيم',
                'latitude' => '24.233',
                'longitude' => '43.23',
                'zone_size' => '365',
                'city_id' => 1,
                'district' => 'مجمع التجارة الحديث',
                'postal_code' => '078678',
                'status' => 'not_active',
                'created_at' => '2022-02-05 03:49:55',
                'updated_at' => '2022-05-07 16:53:16',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}