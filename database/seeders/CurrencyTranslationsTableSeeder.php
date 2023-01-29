<?php

namespace Database\Seeders;

use App\Models\CurrencyTranslation;
use Illuminate\Database\Seeder;

class CurrencyTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        CurrencyTranslation::create([
            'id' => 3,
            'name' => 'SAR',
            'locale' => 'en',
            'currency_id' => 1,
        ]);
        CurrencyTranslation::create([
            'id' => 4,
            'name' => 'ريال',
            'locale' => 'ar',
            'currency_id' => 1,
        ]);


        CurrencyTranslation::create([
            'id' => 1,
            'name' => 'USD',
            'locale' => 'en',
            'currency_id' => 2,
        ]);
        CurrencyTranslation::create([
            'id' => 2,
            'name' => 'دولار',
            'locale' => 'ar',
            'currency_id' => 2,
        ]);


//        \DB::table('currency_translations')->delete();



    }
}
