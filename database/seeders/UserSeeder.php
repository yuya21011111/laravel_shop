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
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => Hash::make('password12345'),
            'created_at' => '2023/01/01 11:11:11',
            'post' => '7610000',
            'address' => '香川県高松市１−１１',
            'age' => '28',
        ]);
    }
}
