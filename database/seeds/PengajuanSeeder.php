<?php

use Illuminate\Database\Seeder;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengajuan')->insert([
        [
            'nama_pegawai' => 'Yanto',
            'rincian' => 'Mengangkut peralatan tambang',
            'kendaraan_id' => '1',
            'acc_A' => 'Dalam Proses',
            'acc_B' => 'Dalam Proses'

        ],
        [
            'nama_pegawai' => 'Anang',
            'rincian' => 'Mengangkut barang buangan',
            'kendaraan_id' => '2',
            'acc_A' => 'Dalam Proses',
            'acc_B' => 'Dalam Proses'
        ],
        [
            'nama_pegawai' => 'Antok',
            'rincian' => 'Mengangkut bahan bakar mesin',
            'kendaraan_id' => '3',
            'acc_A' => 'Dalam Proses',
            'acc_B' => 'Dalam Proses'
        ]]);
    }
}
