<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'title' => '久しぶり',
                'body' => 'コロナで延期続きで久しぶりの開催でしたが最高でした',
                'user_id' => 1, // Assuming a user with ID 1 exists
                'event_id' => 1, // Assuming an event with ID 1 exists
                'review' => 5,
            ],
            [
                'title' => 'HY',
                'body' => '地域密着型フェスなだけあって沖縄出身アーティストばかりでした。',
                'user_id' => 2, // Assuming a user with ID 2 exists
                'event_id' => 2, // Assuming an event with ID 2 exists
                'review' => 4,
            ],
        ]);
    }
}
