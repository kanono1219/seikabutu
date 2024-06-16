<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'name' => '豊見城祭り',
                'category_id' => 1, // Assuming a category with ID 1 exists
                'overview' => '豊見城市内のお祭り',
                'location' => '美らサンビーチ',
                'start_date' => '2024-08-01 18:00:00',
                'end_date' => '2024-08-01 21:00:00',
                'image_url' => 'path/to/poster1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HY SKY Fes',
                'category_id' => 2, // Assuming a category with ID 2 exists
                'overview' => 'HY主催の音楽フェス',
                'location' => '沖縄総合運動公園 多目的広場',
                'start_date' => '2024-10-01 10:00:00',
                'end_date' => '2024-10-01 17:00:00',
                'image_url' => 'path/to/poster2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
