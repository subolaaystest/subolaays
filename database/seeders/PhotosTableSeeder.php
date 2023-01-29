<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('photos')->delete();

        \DB::table('photos')->insert(array (
            0 =>
            array (
                'id' => 1,
                'product_id' => 1,
                'image' => 'photos/1.jpg',
                'is_main' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'product_id' => 1,
                'image' => 'photos/2.jpg',
                'is_main' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'product_id' => 1,
                'image' => 'photos/3.jpg',
                'is_main' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'product_id' => 1,
                'image' => 'photos/4.jpg',
                'is_main' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'product_id' => 4,
                'image' => 'photos/26069141638945827_1229209.jpg',
                'is_main' => 1,
                'created_at' => '2021-12-08 06:43:48',
                'updated_at' => '2021-12-08 06:43:48',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'product_id' => 6,
                'image' => 'photos/90587411638945879_4251850.jpg',
                'is_main' => 1,
                'created_at' => '2021-12-08 06:44:39',
                'updated_at' => '2021-12-08 06:44:39',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'product_id' => 8,
                'image' => 'photos/73713001638945982_9919389.jpg',
                'is_main' => 1,
                'created_at' => '2021-12-08 06:46:22',
                'updated_at' => '2021-12-08 06:46:22',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'product_id' => 10,
                'image' => 'photos/16022611638946019_1120758.jpg',
                'is_main' => 1,
                'created_at' => '2021-12-08 06:46:59',
                'updated_at' => '2021-12-08 06:46:59',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'product_id' => 11,
                'image' => 'photos/17432561638946054_7698925.jpg',
                'is_main' => 1,
                'created_at' => '2021-12-08 06:47:34',
                'updated_at' => '2021-12-08 06:47:34',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'product_id' => 11,
                'image' => 'photos/84882931638946054_2070834.jpg',
                'is_main' => 0,
                'created_at' => '2021-12-08 06:47:34',
                'updated_at' => '2021-12-08 06:47:34',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'product_id' => 13,
                'image' => 'photos/31311071638946253_9304640.jpg',
                'is_main' => 1,
                'created_at' => '2021-12-08 06:50:53',
                'updated_at' => '2021-12-08 06:50:53',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'product_id' => 13,
                'image' => 'photos/76711511638946253_7676266.jpg',
                'is_main' => 0,
                'created_at' => '2021-12-08 06:50:53',
                'updated_at' => '2021-12-08 06:50:53',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'product_id' => 13,
                'image' => 'photos/78175301638946253_8667532.jpg',
                'is_main' => 0,
                'created_at' => '2021-12-08 06:50:54',
                'updated_at' => '2021-12-08 06:50:54',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'product_id' => 14,
                'image' => 'photos/76711511638946253_7676266.jpg',
                'is_main' => 1,
                'created_at' => '2021-12-08 06:50:53',
                'updated_at' => '2021-12-08 06:50:53',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'product_id' => 15,
                'image' => 'photos/78175301638946253_8667532.jpg',
                'is_main' => 1,
                'created_at' => '2021-12-08 06:50:54',
                'updated_at' => '2021-12-08 06:50:54',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 18,
                'product_id' => 17,
                'image' => 'photos/76711511638946253_7676266.jpg',
                'is_main' => 1,
                'created_at' => '2021-12-08 06:50:53',
                'updated_at' => '2021-12-08 06:50:53',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 21,
                'product_id' => 16,
                'image' => 'photos/1.jpg',
                'is_main' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 22,
                'product_id' => 18,
                'image' => 'photos/83941671640831620_8990541.jpg',
                'is_main' => 1,
                'created_at' => '2021-12-30 02:33:40',
                'updated_at' => '2021-12-30 02:33:40',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 23,
                'product_id' => 19,
                'image' => 'photos/59866771640831786_8613101.jpg',
                'is_main' => 1,
                'created_at' => '2021-12-30 02:36:26',
                'updated_at' => '2021-12-30 02:36:26',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 24,
                'product_id' => 20,
                'image' => 'photos/70590281642434868_4415192.jpg',
                'is_main' => 1,
                'created_at' => '2022-01-17 15:54:29',
                'updated_at' => '2022-01-17 15:54:29',
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => 25,
                'product_id' => 21,
                'image' => 'photos/88236481642470772_8284210.jpg',
                'is_main' => 1,
                'created_at' => '2022-01-18 01:52:52',
                'updated_at' => '2022-01-18 01:52:52',
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => 26,
                'product_id' => 21,
                'image' => 'photos/14706071642470772_4480397.jpg',
                'is_main' => 0,
                'created_at' => '2022-01-18 01:52:52',
                'updated_at' => '2022-01-18 01:52:52',
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => 27,
                'product_id' => 21,
                'image' => 'photos/99170751642470772_7241230.jpg',
                'is_main' => 0,
                'created_at' => '2022-01-18 01:52:53',
                'updated_at' => '2022-01-18 01:52:53',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => 28,
                'product_id' => 21,
                'image' => 'photos/46028781642470773_8672344.jpg',
                'is_main' => 0,
                'created_at' => '2022-01-18 01:52:53',
                'updated_at' => '2022-01-18 01:52:53',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => 29,
                'product_id' => 22,
                'image' => 'photos/37552011643042253_6640949.jpg',
                'is_main' => 1,
                'created_at' => '2022-01-24 16:37:34',
                'updated_at' => '2022-01-24 16:37:34',
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => 30,
                'product_id' => 23,
                'image' => 'photos/32833921643042631_6315684.jpg',
                'is_main' => 0,
                'created_at' => '2022-01-24 16:43:51',
                'updated_at' => '2022-01-24 16:43:51',
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => 31,
                'product_id' => 24,
                'image' => 'photos/96944651643042791_1139969.jpg',
                'is_main' => 0,
                'created_at' => '2022-01-24 16:46:31',
                'updated_at' => '2022-01-24 16:46:31',
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => 32,
                'product_id' => 25,
                'image' => 'photos/12548511645349805_9755599.jpg',
                'is_main' => 1,
                'created_at' => '2022-02-20 09:36:45',
                'updated_at' => '2022-02-20 09:36:45',
                'deleted_at' => NULL,
            ),
            28 =>
            array (
                'id' => 33,
                'product_id' => 25,
                'image' => 'photos/78173831645349805_5577237.jpg',
                'is_main' => 0,
                'created_at' => '2022-02-20 09:36:45',
                'updated_at' => '2022-02-20 09:36:45',
                'deleted_at' => NULL,
            ),
            29 =>
            array (
                'id' => 34,
                'product_id' => 25,
                'image' => 'photos/86490971645349805_1610662.jpg',
                'is_main' => 0,
                'created_at' => '2022-02-20 09:36:45',
                'updated_at' => '2022-02-20 09:36:45',
                'deleted_at' => NULL,
            ),
            30 =>
            array (
                'id' => 35,
                'product_id' => 25,
                'image' => 'photos/64312201645349805_9719443.jpg',
                'is_main' => 0,
                'created_at' => '2022-02-20 09:36:45',
                'updated_at' => '2022-02-20 09:36:45',
                'deleted_at' => NULL,
            ),
            31 =>
            array (
                'id' => 36,
                'product_id' => 26,
                'image' => 'photos/80123031645350331_4655384.jpg',
                'is_main' => 1,
                'created_at' => '2022-02-20 09:45:31',
                'updated_at' => '2022-02-20 09:45:31',
                'deleted_at' => NULL,
            ),
            32 =>
            array (
                'id' => 37,
                'product_id' => 26,
                'image' => 'photos/75123971645350331_4715551.jpg',
                'is_main' => 0,
                'created_at' => '2022-02-20 09:45:31',
                'updated_at' => '2022-02-20 09:45:31',
                'deleted_at' => NULL,
            ),
            33 =>
            array (
                'id' => 38,
                'product_id' => 26,
                'image' => 'photos/35934331645350331_5540199.jpg',
                'is_main' => 0,
                'created_at' => '2022-02-20 09:45:31',
                'updated_at' => '2022-02-20 09:45:31',
                'deleted_at' => NULL,
            ),
            34 =>
            array (
                'id' => 39,
                'product_id' => 26,
                'image' => 'photos/19242341645350331_8369353.jpg',
                'is_main' => 0,
                'created_at' => '2022-02-20 09:45:31',
                'updated_at' => '2022-02-20 09:45:31',
                'deleted_at' => NULL,
            ),
            35 =>
            array (
                'id' => 40,
                'product_id' => 26,
                'image' => 'photos/19620291645351104_8139809.jpg',
                'is_main' => 1,
                'created_at' => '2022-02-20 09:58:25',
                'updated_at' => '2022-02-20 09:58:25',
                'deleted_at' => NULL,
            ),
            36 =>
            array (
                'id' => 41,
                'product_id' => 27,
                'image' => 'photos/93403571648400469_2191232.jpg',
                'is_main' => 1,
                'created_at' => '2022-03-27 17:01:10',
                'updated_at' => '2022-03-27 17:01:10',
                'deleted_at' => NULL,
            ),
            37 =>
            array (
                'id' => 42,
                'product_id' => 28,
                'image' => 'photos/74741371648400563_1880086.jpg',
                'is_main' => 1,
                'created_at' => '2022-03-27 17:02:43',
                'updated_at' => '2022-03-27 17:02:43',
                'deleted_at' => NULL,
            ),
            38 =>
            array (
                'id' => 43,
                'product_id' => 29,
                'image' => 'photos/96106471648400846_6250394.jpg',
                'is_main' => 1,
                'created_at' => '2022-03-27 17:07:26',
                'updated_at' => '2022-03-27 17:07:26',
                'deleted_at' => NULL,
            ),
            39 =>
            array (
                'id' => 44,
                'product_id' => 30,
                'image' => 'photos/75134391648410967_6015826.jpg',
                'is_main' => 1,
                'created_at' => '2022-03-27 19:56:08',
                'updated_at' => '2022-03-27 19:56:08',
                'deleted_at' => NULL,
            ),
            40 =>
            array (
                'id' => 45,
                'product_id' => 32,
                'image' => 'photos/30618601648411978_1564878.jpg',
                'is_main' => 1,
                'created_at' => '2022-03-27 20:12:58',
                'updated_at' => '2022-03-27 20:12:58',
                'deleted_at' => NULL,
            ),
            41 =>
            array (
                'id' => 46,
                'product_id' => 33,
                'image' => 'photos/26414511648412078_6435853.jpg',
                'is_main' => 1,
                'created_at' => '2022-03-27 20:14:38',
                'updated_at' => '2022-03-27 20:14:38',
                'deleted_at' => NULL,
            ),
            42 =>
            array (
                'id' => 47,
                'product_id' => 34,
                'image' => 'photos/99965431648412139_5789138.jpg',
                'is_main' => 1,
                'created_at' => '2022-03-27 20:15:39',
                'updated_at' => '2022-03-27 20:15:39',
                'deleted_at' => NULL,
            ),
            43 =>
            array (
                'id' => 48,
                'product_id' => 35,
                'image' => 'photos/87796551648412301_6769458.jpg',
                'is_main' => 1,
                'created_at' => '2022-03-27 20:18:21',
                'updated_at' => '2022-03-27 20:18:21',
                'deleted_at' => NULL,
            ),
        44 =>
            array (
                'id' => 49,
                'product_id' => 36,
                'image' => 'photos/87796551648412301_6769458.jpg',
                'is_main' => 1,
                'created_at' => '2022-03-27 20:18:21',
                'updated_at' => '2022-03-27 20:18:21',
                'deleted_at' => NULL,
            ),
        ));


    }
}
