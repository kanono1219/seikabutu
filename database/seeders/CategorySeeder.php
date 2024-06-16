<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['category_name' => '祭り',],
            ['category_name' => '音楽イベント',],
            ['category_name' => '展示会',],
            ['category_name' => 'スポーツイベント',],
            ['category_name' => '式典',],
        ]);
    }
}
