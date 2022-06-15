<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    protected $table = 'pengajuan';

    protected $fillable = [
        'nomor_kendaraan'
    ];
}
