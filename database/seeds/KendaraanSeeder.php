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
            'nama' => 'Honda Fuso XT2',
            'jenis' => 'Barang',
            'nopol' => 'N 1955 HG',
            'bbm' => '11,5',
            'jadwal_service' => '13/08/2022',
            'hak_milik' => 'Sendiri',
            'riwayat_pemakaian' => 'Baik'
        ],
        [
            'nama' => 'Mitsubishi Carry MX2',
            'jenis' => 'Barang',
            'nopol' => 'N 8765 GF',
            'bbm' => '13,4',
            'jadwal_service' => '13/08/2022',
            'hak_milik' => 'Sewa PT. A',
            'riwayat_pemakaian' => 'Baik'
        ],
        [
            'nama' => 'Toyota Fuso L2',
            'jenis' => 'Barang',
            'nopol' => 'N 8724 R',
            'bbm' => '12,5',
            'jadwal_service' => '13/08/2022',
            'hak_milik' => 'Sewa PT. B',
            'riwayat_pemakaian' => 'Baik'
        ]]);
    }
}
