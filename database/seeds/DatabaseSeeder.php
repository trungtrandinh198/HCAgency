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
            'name' => str_random(10),
            'username' => 'admin',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('111111'),
        ]);
        DB::table('categorys')->insert([
            'name' => 'Bánh',
        ]);
        DB::table('categorys')->insert([
            'name' => 'Kẹo',
        ]);
        DB::table('customers')->insert([
            'name' => 'bà hai',
            'address' => 'Chợ cồn',
            'phone_number' => '01234545443'
        ]);
    }
}
