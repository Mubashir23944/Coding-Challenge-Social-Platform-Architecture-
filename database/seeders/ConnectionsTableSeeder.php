<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConnectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('connections')->delete();
        
        \DB::table('connections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'connection_1' => 24,
                'connection_2' => 31,
                'created_at' => '2022-09-06 14:46:27',
                'updated_at' => '2022-09-06 14:46:27',
            ),
            1 => 
            array (
                'id' => 2,
                'connection_1' => 25,
                'connection_2' => 31,
                'created_at' => '2022-09-06 14:46:28',
                'updated_at' => '2022-09-06 14:46:28',
            ),
            2 => 
            array (
                'id' => 3,
                'connection_1' => 22,
                'connection_2' => 5,
                'created_at' => '2022-09-06 14:46:28',
                'updated_at' => '2022-09-06 14:46:28',
            ),
            3 => 
            array (
                'id' => 5,
                'connection_1' => 31,
                'connection_2' => 30,
                'created_at' => '2022-09-06 22:08:48',
                'updated_at' => '2022-09-06 22:08:48',
            ),
            4 => 
            array (
                'id' => 6,
                'connection_1' => 26,
                'connection_2' => 31,
                'created_at' => '2022-09-06 17:10:31',
                'updated_at' => '2022-09-06 17:10:31',
            ),
            5 => 
            array (
                'id' => 7,
                'connection_1' => 27,
                'connection_2' => 31,
                'created_at' => '2022-09-06 17:10:49',
                'updated_at' => '2022-09-06 17:10:49',
            ),
            6 => 
            array (
                'id' => 8,
                'connection_1' => 28,
                'connection_2' => 31,
                'created_at' => '2022-09-06 17:11:04',
                'updated_at' => '2022-09-06 17:11:04',
            ),
        ));
        
        
    }
}