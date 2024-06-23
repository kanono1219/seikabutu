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
            ['name' => '祭り',],
            ['name' => '音楽イベント',],
            ['name' => '展示会',],
            ['name' => 'スポーツイベント',],
            ['name' => '式典',],
        ]);
    }
}
