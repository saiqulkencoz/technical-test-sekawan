<?php

namespace App\Http\Controllers;

use \App\Kendaraan;
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
        return view('admin.index',['data_kendaraan' => $data_kendaraan]);
    }
    public function create(Request $request){
        Kendaraan::create($request->all());
        return redirect()->route('data-kendaraan')->with('Sukses','Data Berhasil Diinput');
    }
    public function update_index($id){
        $data_kendaraan = Kendaraan::find($id);
        return view('admin.edit',['data_kendaraan' => $data_kendaraan]);
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
