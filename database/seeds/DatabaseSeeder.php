<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Trung Trần',
            'username' => 'admin',
            'email' => str_random(30),
            'password' => bcrypt('111111'),
        ]);
        DB::table('categorys')->insert([
            'name' => 'Bánh',
        ]);
        DB::table('categorys')->insert([
            'name' => 'Kẹo',
        ]);
        DB::table('customers')->insert([
            'name' => 'Khách lẻ',
            'address' => 'Không có',
            'phone_number' => '0000000000'
        ]);
        DB::table('products')->insert([
            'name' => 'Thèo Lèo',
            'price' => '4000',
            'category_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Nui Bắp',
            'price' => '4000',
            'category_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Bánh Thánh',
            'price' => '4000',
            'category_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Mè Xững',
            'price' => '17000',
            'category_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Dồi nhỏ',
            'price' => '18000',
            'category_id' => 1
        ]);
    }
}
