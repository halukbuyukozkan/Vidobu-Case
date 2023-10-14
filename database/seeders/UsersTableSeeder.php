<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'test',
                'email' => 'test@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kuvw4rBkc3NVmal9GSwgmOI2eFz6Z3eU2Ul2VqT.LdupuYmgwj0aa',
                'remember_token' => NULL,
                'created_at' => '2023-10-14 17:54:17',
                'updated_at' => '2023-10-14 17:54:17',
            ),
        ));
        
        
    }
}