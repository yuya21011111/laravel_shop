<?php

namespace Database\Seeders;

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
        DB::table('primary_categories')->insert([
            [
                'name' => '野菜',
                'sort_order' => 1,
            ],
            [
                'name' => 'フルーツ',
                'sort_order' => 2,
            ],
            [
                'name' => 'その他',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'にんじん',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => 'トマト',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => 'パプリカ',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => 'ピーマン',
                'sort_order' => 4,
                'primary_category_id' => 1
            ],
            [
                'name' => 'キュウリ',
                'sort_order' => 5,
                'primary_category_id' => 1
            ],
            [
                'name' => 'ゴーヤ',
                'sort_order' => 6,
                'primary_category_id' => 1
            ],
            [
                'name' => 'ナス',
                'sort_order' => 7,
                'primary_category_id' => 1
            ],
            [
                'name' => 'りんご',
                'sort_order' => 8,
                'primary_category_id' => 2
            ],
            [
                'name' => 'バナナ',
                'sort_order' => 9,
                'primary_category_id' => 2
            ],
            [
                'name' => 'いちご',
                'sort_order' => 10,
                'primary_category_id' => 2
            ],
            [
                'name' => 'さくらんぼ',
                'sort_order' => 11,
                'primary_category_id' => 2
            ],
            [
                'name' => '柿',
                'sort_order' => 12,
                'primary_category_id' => 2
            ],
            [
                'name' => 'すもも',
                'sort_order' => 13,
                'primary_category_id' => 2
            ],
            [
                'name' => 'びわ',
                'sort_order' => 14,
                'primary_category_id' => 2
            ],
            [
                'name' => 'その他',
                'sort_order' => 15,
                'primary_category_id' => 3
            ],
        ]);
    }
}
