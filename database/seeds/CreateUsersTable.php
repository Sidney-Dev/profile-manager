<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Company Admin',
            'email'=> 'fullstack@example.com',
            'password'=> bcrypt('secret'),
            'phone' => '0732254784',
            'created_at' => now()
        ]);
    }
}
