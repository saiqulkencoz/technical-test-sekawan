<?php

use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
        [
            'nama' => 'Toyota Fuso L2',
            'jenis' => 'Barang',
            'merek' => 'Toyota',
            'plat_id' => '1',
            'bbm' => '12,5',
            'jadwal_service' => '13/08/2022',
            'hak_milik' => 'Sewa PT. B',
            'riwayat_pemakaian' => 'Baik'
        ],
        [
            'nama' => 'Mitsubishi Carry MX2',
            'jenis' => 'Barang',
            'merek' => 'Mitsubishi',
            'plat_id' => '2',
            'bbm' => '13,4',
            'jadwal_service' => '17/05/2022',
            'hak_milik' => 'Sewa PT. A',
            'riwayat_pemakaian' => 'Baik'
        ],
        [
            'nama' => 'Honda CR-V',
            'jenis' => 'Orang',
            'merek' => 'Honda',
            'plat_id' => '3',
            'bbm' => '11,4',
            'jadwal_service' => '10/06/2022',
            'hak_milik' => 'Sendiri',
            'riwayat_pemakaian' => 'Baik'
        ],
    ]);
    }
}
