<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '沖縄 太郎',
                'password' => Hash::make('1219'),
                'image_url' => 'path/to/profile1.jpg',
                'email' => Str::random(5).'@gmail.com',
            ],
            [
                'name' => 'Jane Smith',
                'password' => Hash::make('password'),
                'image_url' => 'path/to/profile2.jpg',
                'email' => Str::random(5).'@gmail.com',
            ],
        ]);
    }
}
