<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table = 'kendaraan';

    protected $appends = ['pemakaian'];

    protected $fillable = [
        'nama','jenis','merek','plat_id','bbm','jadwal_service','hak_milik','riwayat_pemakaian'
    ];

    public function pengajuan(){
        return $this->hasMany(Pengajuan::class);
    }
    public function plat(){
        return $this->belongsTo(Plat::class);
    }
}
