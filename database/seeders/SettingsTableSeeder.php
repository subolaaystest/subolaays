<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('settings')->delete();

        \DB::table('settings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'email' => 'subolaays@gmail.com',
                'city' => 'الرياض',
                'country' => 'المملكة العربية السعودية',
                'phone' => '002342342',
                'mobile' => '0053453450',
                'whatsapp' => '00234234234',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/home',
                'linked_in' => 'https://www.linkedin.com/',
                'instagram' => 'https://www.instagram.com/',
                'snapchat' => NULL,
                'telegram' => NULL,
                'youtube' => NULL,
                'logo' => 'logo.png',
                'image' => '1.jpg',
                'order_point' => 1,
                'share_points' => 1,
                'deal_points' => 1,
                'stories_count' => 20,
                'deals_count' => 15,
                'daily_stories_count' => 5,
                'daily_deals_count' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
