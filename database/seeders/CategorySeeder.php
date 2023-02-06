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
                'name' => 'ドリンク',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'さつまいも',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => 'ニンニク',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => 'とうもろこし',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => 'みかん',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => 'ブドウ',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'name' => 'いちご',
                'sort_order' => 6,
                'primary_category_id' => 2
            ],
        ]);
    }
}
