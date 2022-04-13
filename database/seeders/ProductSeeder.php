<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => '三菱ふそう　冷凍車',
                'description' => '年式:19/9　積載:2トン',
                'image' => '/images/1.jpg',
                'price' => 3000000,
                'age' => 2009,
                'run' => '5',
                'kinds' => '平ボディ'
            ],
            [
                'name' => '日野　4トン',
                'description' => '年式:16/8　積載:4トン',
                'image' => '/images/2.jpg',
                'price' => 5000000,
                'age' => 2018,
                'run' => '15',
                'kinds' => '平ボディ'
            ],
            [
                'name' => 'いすず　アルミバン',
                'description' => '年式:21/8　積載:4トン',
                'image' => '/images/3.jpg',
                'price' => 6000000,
                'age' => 2020,
                'run' => '21',
                'kinds' => '冷凍車'
            ],
        ]);
    }
}
