<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                "name" => "test",
                "lastname" => "ayhan",
                "age" => 25,
                "email" => "ayhan@test.com",
                "role_id" => 1,
                "avatar_id" => 2,
                "password" => Hash::make('testtest'),
            ],
            [
                "name" => "test",
                "lastname" => "elias",
                "age" => 25,
                "email" => "elias@test.com",
                "role_id" => 2,
                "avatar_id" => 2,
                "password" => Hash::make('testtest'),
            ],
            [
                "name" => "test",
                "lastname" => "cactus",
                "age" => 25,
                "email" => "cactus@test.com",
                "role_id" => 3      ,
                "avatar_id" => 3,
                "password" => Hash::make('testtest'),
            ],
        ]);
    }
}
