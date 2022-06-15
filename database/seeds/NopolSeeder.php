<?php

use Illuminate\Database\Seeder;

class NopolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plat')->insert([
            ['nomor_kendaraan' => 'N 2285 OX'],
            ['nomor_kendaraan' => 'AG 2995 TY'],
            ['nomor_kendaraan' => 'N 5572 QW']
        ]);
    }
}
