<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('test'),
        ],
        [
            'name' => 'Manager A',
            'email' => 'mng_a@gmail.com',
            'password' => bcrypt('test'),
        ],
        [
            'name' => 'Manager B',
            'email' => 'mng_b@gmail.com',
            'password' => bcrypt('test'),
        ]]);
    }
}
