<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'electrosharaf@gmail.com',
                'token' => '$2y$10$HcrOtLd9NUpbPIgmW0jlF.tzzYk/JhMF/bbw5aKBfH2S0yph/pP2e',
                'created_at' => '2019-12-21 02:47:43',
            ),
            1 => 
            array (
                'email' => 'yosuf@yosuf.com',
                'token' => '$2y$10$/YrCmm61CfnKfAvAsgeEF.ckn5.OxijF7dZeCFlMxnr.zIVy6vwCS',
                'created_at' => '2020-04-26 21:25:48',
            ),
            2 => 
            array (
                'email' => 'test@gmail.com',
                'token' => '$2y$10$06K2oEINlxvtbekyynLOcuUhHTa9Xbr4cIOcBUoXvQEAp4ku4omMW',
                'created_at' => '2020-04-26 21:34:24',
            ),
            3 => 
            array (
                'email' => 'zoom@gmail.com',
                'token' => '$2y$10$lEYJUugkk3P3dZuS3xPIIuOC8yG1XoPAvcN39t/kQONqHhjlAp7j6',
                'created_at' => '2020-06-07 22:12:51',
            ),
            4 => 
            array (
                'email' => 'tarik.zaeem@gmail.com',
                'token' => '$2y$10$G/kTs3kZ8OJskRUAN2w/IeXtpZUJZg8D/C5CUmS3nFSncqTsk8Zl6',
                'created_at' => '2020-06-10 04:09:07',
            ),
            5 => 
            array (
                'email' => 'asiaa7med1996@gmail.com',
                'token' => '$2y$10$KZwee9lLMbYGbIFE10E/h.lVnlpVOzDNSaaepNy7C8ZfcwDRFPcpu',
                'created_at' => '2020-06-17 23:24:01',
            ),
        ));
        
        
    }
}