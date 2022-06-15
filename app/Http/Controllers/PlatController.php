<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plat;
class PlatController extends Controller
{
    public function index(){
        $data_plat = Plat::all();
        return view('admin.index_nopol',['data_kendaraan' => $data_plat]);
    }
}
