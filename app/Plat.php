<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    protected $table = 'plat';

    protected $fillable = [
        'nomor_kendaraan',
    ];

    public function kendaraan(){
        return $this->hasMany(Kendaraan::class);
    }
}
