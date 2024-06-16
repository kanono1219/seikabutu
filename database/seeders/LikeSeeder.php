<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('likes')->insert([
            [
                'user_id' => 1, // Assuming a user with ID 1 exists
                'review_id' => 1, // Assuming a review with ID 1 exists
            ],
            [
                'user_id' => 2, // Assuming a user with ID 2 exists
                'review_id' => 2, // Assuming a review with ID 2 exists
            ],
        ]);
    }
}
