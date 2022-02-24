<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            [
                'img' => '/img/op.png',
                'name' => 'op'
            ],
            [
                'img' => '/img/luffy.jfif',
                'name' => 'luffy'
            ],
            [
                'img' => '/img/zoro.jfif',
                'name' => 'zoro'
            ],
            [
                'img' => '/img/jinbe.jfif',
                'name' => 'jinbe'
            ],
            [
                'img' => '/img/sanji.jfif',
                'name' => 'sanji'
            ],
        ]);
    }
}
