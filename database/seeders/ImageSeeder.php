<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'img' => '/img/op.png',
                'name' => 'op',
                'category_id' => 1,
            ],
            [
                'img' => '/img/luffy.jfif',
                'name' => 'luffy',
                'category_id' => 1,

            ],
            [
                'img' => '/img/zoro.jfif',
                'name' => 'zoro',
                'category_id' => 1,

            ],
            [
                'img' => '/img/jinbe.jfif',
                'name' => 'jinbe',
                'category_id' => 1,

            ],
            [
                'img' => '/img/sanji.jfif',
                'name' => 'sanji',
                'category_id' => 1,

            ],
        ]);
    }
}
