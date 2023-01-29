<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'إدارة النظام',
                'email' => 'm@gmail.com',
                'image' => NULL,
                'mobile' => '0597116675',
                'password' => '$2y$10$lttzFOA/YzD8CAbW7VvHOeYjtp69eAOjpyCl1sItzBUR1dHHt3Oz6',
                'remember_token' => 'dhMzKkLCGeExQeY20yvfbUSP1uRBKZVzvAWA5IZlyd0Xr3o8tpxLJRQpNrCr',
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => '2021-01-02 14:48:36',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}