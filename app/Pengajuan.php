<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuan';

    protected $fillable = [
        'nama_pegawai','rincian','kendaraan_id','acc_A','acc_B'
    ];

    public function kendaraan(){
        return $this->belongsTo(Kendaraan::class);
    }
}
