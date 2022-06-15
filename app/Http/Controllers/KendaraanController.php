<?php

namespace App\Http\Controllers;

use \App\Kendaraan;
use \App\Plat;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $data_kendaraan = Kendaraan::where('nama','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_kendaraan = Kendaraan::all();
        }
        $plat = Plat::all();
        return view('admin.index',['data_kendaraan' => $data_kendaraan],['plat' => $plat]);
    }
    public function create(Request $request){
        // dd($request->all());
        Kendaraan::create($request->all());
        return redirect()->route('data-kendaraan')->with('Sukses','Data Berhasil Diinput');
    }
    public function update_index($id){
        $data_kendaraan = Kendaraan::find($id);
        $plat = Plat::all();
        return view('admin.edit',['data_kendaraan' => $data_kendaraan],['plat' => $plat]);
    }
    public function update(Request $request,$id){
        $data_kendaraan = Kendaraan::find($id);
        $data_kendaraan->update($request->all());
        return redirect()->route('data-kendaraan')->with('Sukses','Data Berhasil Di Update');
    }
    public function delete($id){
        $data_kendaraan = Kendaraan::find($id);
        $data_kendaraan -> delete();
        return redirect()->route('data-kendaraan')->with('Sukses','Data Berhasil Dihapus');
    }
}
