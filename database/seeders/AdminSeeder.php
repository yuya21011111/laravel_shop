<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'test',
            'email' => 'test@yahoo.co.jp',
            'password' => Hash::make('password12345'),
            'created_at' => '2023/01/01 11:11:11'
        ]);
    }
}
