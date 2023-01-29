<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;


class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Currency::create([
            'status' => 'active',
            'code'=> 'sar',
            'symbol'=> '﷼‎'
        ]);
        Currency::create([
            'status' => 'active',
            'code' => 'USD',
            'symbol' => '$'
        ]);


//        \DB::table('currencies')->delete();



    }
}
