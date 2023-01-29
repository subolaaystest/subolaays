<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_access_tokens')->delete();
        
        \DB::table('oauth_access_tokens')->insert(array (
            0 => 
            array (
                'id' => '3aa5c26120defa5c2d7d3735b2af6fa4b908aa31c08d138b0cd4350b0ac1f356eb38014237a7549d',
                'user_id' => 47,
                'client_id' => 1,
                'name' => 'mobile',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-24 09:10:17',
                'updated_at' => '2021-11-24 09:10:17',
                'expires_at' => '2022-11-24 09:10:17',
            ),
            1 => 
            array (
                'id' => '6658b7a4399d0960479f6fdf6cc0954ed13296ded88e2878470b50f89b88dad4cf09b9cbde3bf6b4',
                'user_id' => 47,
                'client_id' => 1,
                'name' => 'mobile',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-24 09:11:03',
                'updated_at' => '2021-11-24 09:11:03',
                'expires_at' => '2022-11-24 09:11:03',
            ),
            2 => 
            array (
                'id' => '864d6462faac1ff11a0fc4a385de1d8c47b08a428ef394e307c22dd19a223f16523f1c08140a2c7a',
                'user_id' => 47,
                'client_id' => 1,
                'name' => 'mobile',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-24 09:11:16',
                'updated_at' => '2021-11-24 09:11:16',
                'expires_at' => '2022-11-24 09:11:16',
            ),
            3 => 
            array (
                'id' => '98111724ab8262a565a9e01b63caf0c8567caa55d28ada07422cf671e9c6bc6071ca18fe44dbbbd2',
                'user_id' => 47,
                'client_id' => 1,
                'name' => 'mobile',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-24 09:10:47',
                'updated_at' => '2021-11-24 09:10:47',
                'expires_at' => '2022-11-24 09:10:47',
            ),
            4 => 
            array (
                'id' => '9934c3fc8b5fbc4ee54ddc36a6c148e5375e23dedb6cb8357ad5be2554ff8f5545350f83b9740378',
                'user_id' => 47,
                'client_id' => 1,
                'name' => 'mobile',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-24 09:11:49',
                'updated_at' => '2021-11-24 09:11:49',
                'expires_at' => '2022-11-24 09:11:49',
            ),
            5 => 
            array (
                'id' => 'b472ff573d55c9bcd117fdccb2ce4a813b4fbbb86b0be46fd63bfe948290fffe96bf82535364ecfd',
                'user_id' => 47,
                'client_id' => 1,
                'name' => 'mobile',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-24 08:59:26',
                'updated_at' => '2021-11-24 08:59:26',
                'expires_at' => '2022-11-24 08:59:26',
            ),
            6 => 
            array (
                'id' => 'bb059643d7d42138022f49046527f8189a20359d0b9afd89f5ea4e6dd1f54d056a7c73d0eaf22485',
                'user_id' => 47,
                'client_id' => 1,
                'name' => 'mobile',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-24 09:12:11',
                'updated_at' => '2021-11-24 09:12:11',
                'expires_at' => '2022-11-24 09:12:11',
            ),
            7 => 
            array (
                'id' => 'db04bf7880aa3acb30817bd4f852e030eff48c1b5aff6bb6f876a59fe838a614a265c73e466e705f',
                'user_id' => 47,
                'client_id' => 1,
                'name' => 'mobile',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-24 09:12:03',
                'updated_at' => '2021-11-24 09:12:03',
                'expires_at' => '2022-11-24 09:12:03',
            ),
        ));
        
        
    }
}