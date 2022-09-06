<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RequestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('requests')->delete();
        
        \DB::table('requests')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sender_id' => 31,
                'receiver_id' => 1,
                'created_at' => '2022-09-06 17:27:24',
                'updated_at' => '2022-09-06 17:27:24',
            ),
            1 => 
            array (
                'id' => 2,
                'sender_id' => 31,
                'receiver_id' => 2,
                'created_at' => '2022-09-06 17:27:25',
                'updated_at' => '2022-09-06 17:27:25',
            ),
            2 => 
            array (
                'id' => 3,
                'sender_id' => 31,
                'receiver_id' => 3,
                'created_at' => '2022-09-06 17:27:26',
                'updated_at' => '2022-09-06 17:27:26',
            ),
            3 => 
            array (
                'id' => 4,
                'sender_id' => 31,
                'receiver_id' => 4,
                'created_at' => '2022-09-06 17:27:27',
                'updated_at' => '2022-09-06 17:27:27',
            ),
            4 => 
            array (
                'id' => 5,
                'sender_id' => 31,
                'receiver_id' => 5,
                'created_at' => '2022-09-06 17:27:28',
                'updated_at' => '2022-09-06 17:27:28',
            ),
            5 => 
            array (
                'id' => 6,
                'sender_id' => 31,
                'receiver_id' => 6,
                'created_at' => '2022-09-06 17:27:28',
                'updated_at' => '2022-09-06 17:27:28',
            ),
            6 => 
            array (
                'id' => 7,
                'sender_id' => 31,
                'receiver_id' => 7,
                'created_at' => '2022-09-06 17:27:29',
                'updated_at' => '2022-09-06 17:27:29',
            ),
            7 => 
            array (
                'id' => 8,
                'sender_id' => 31,
                'receiver_id' => 8,
                'created_at' => '2022-09-06 17:27:30',
                'updated_at' => '2022-09-06 17:27:30',
            ),
            8 => 
            array (
                'id' => 9,
                'sender_id' => 31,
                'receiver_id' => 9,
                'created_at' => '2022-09-06 17:27:31',
                'updated_at' => '2022-09-06 17:27:31',
            ),
            9 => 
            array (
                'id' => 10,
                'sender_id' => 31,
                'receiver_id' => 10,
                'created_at' => '2022-09-06 17:27:32',
                'updated_at' => '2022-09-06 17:27:32',
            ),
            10 => 
            array (
                'id' => 11,
                'sender_id' => 31,
                'receiver_id' => 11,
                'created_at' => '2022-09-06 17:27:33',
                'updated_at' => '2022-09-06 17:27:33',
            ),
            11 => 
            array (
                'id' => 12,
                'sender_id' => 31,
                'receiver_id' => 12,
                'created_at' => '2022-09-06 17:27:33',
                'updated_at' => '2022-09-06 17:27:33',
            ),
            12 => 
            array (
                'id' => 13,
                'sender_id' => 31,
                'receiver_id' => 13,
                'created_at' => '2022-09-06 17:27:34',
                'updated_at' => '2022-09-06 17:27:34',
            ),
            13 => 
            array (
                'id' => 14,
                'sender_id' => 31,
                'receiver_id' => 14,
                'created_at' => '2022-09-06 17:27:35',
                'updated_at' => '2022-09-06 17:27:35',
            ),
            14 => 
            array (
                'id' => 15,
                'sender_id' => 31,
                'receiver_id' => 15,
                'created_at' => '2022-09-06 17:27:36',
                'updated_at' => '2022-09-06 17:27:36',
            ),
            15 => 
            array (
                'id' => 16,
                'sender_id' => 20,
                'receiver_id' => 31,
                'created_at' => '2022-09-06 22:27:44',
                'updated_at' => '2022-09-06 22:27:44',
            ),
            16 => 
            array (
                'id' => 17,
                'sender_id' => 21,
                'receiver_id' => 31,
                'created_at' => '2022-09-06 22:27:44',
                'updated_at' => '2022-09-06 22:27:44',
            ),
            17 => 
            array (
                'id' => 18,
                'sender_id' => 22,
                'receiver_id' => 31,
                'created_at' => '2022-09-06 22:28:36',
                'updated_at' => '2022-09-06 22:28:36',
            ),
            18 => 
            array (
                'id' => 19,
                'sender_id' => 23,
                'receiver_id' => 31,
                'created_at' => '2022-09-06 22:28:36',
                'updated_at' => '2022-09-06 22:28:36',
            ),
        ));
        
        
    }
}