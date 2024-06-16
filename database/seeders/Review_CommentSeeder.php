<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Review_CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review_comments')->insert([
            [
                'user_id' => 1, // Assuming a user with ID 1 exists
                'review_id' => 1, // Assuming a review with ID 1 exists
                'title' => '最高',
                'body' => '私も行きましたがよかったです。',
            ],
            [
                'user_id' => 2, // Assuming a user with ID 2 exists
                'review_id' => 2, // Assuming a review with ID 2 exists
                'title' => '暑かった',
                'body' => 'ぎゅうぎゅうで暑かったですよ。',
            ],
        ]);
    }
}
