<?php

namespace App\Exports;

use App\Pengajuan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PengajuanExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pengajuan::all();
    }
    public function map($data): array
    {
        return [
            $data->nama_pegawai,
            $data->kendaraan->nama,
            $data->kendaraan->nopol,
            $data->kendaraan->hak_milik,
            $data->rincian,
            $data->acc_A,
            $data->acc_B
        ];
    }
    public function headings(): array
    {
        return [
            'Nama Driver',
            'Nama Kendaraan',
            'Nomor Polisi',
            'Hak Milik',
            'Rincian',
            'Approval Manager A',
            'Approval Manager B'
        ];
    }
}
