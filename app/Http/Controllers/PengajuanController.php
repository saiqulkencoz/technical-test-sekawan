<?php

namespace App\Http\Controllers;

use \App\Pengajuan;
use \App\Kendaraan;

use App\Exports\PengajuanExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index(Request $request){
        $data_kendaraan = Kendaraan::all();
        $data_pengajuan = Pengajuan::all();
        return view('admin.index_req',['data_kendaraan' => $data_kendaraan],['data_pengajuan' => $data_pengajuan]);
    }
    public function create(Request $request){
        $request->request->add(['acc_A'=>'Dalam Proses']);
        $request->request->add(['acc_B'=>'Dalam Proses']);
        Pengajuan::create($request->all());
        return redirect()->route('data-pengajuan')->with('Sukses','Data Berhasil Diinput');
    }
    public function update_index($id){
        $data_pengajuan = Pengajuan::find($id);
        $data_kendaraan = Kendaraan::all();
        return view('admin.edit_req',['data_pengajuan' => $data_pengajuan],['data_kendaraan' => $data_kendaraan]);
    }
    public function update(Request $request,$id){
        $data_pengajuan = Pengajuan::find($id);
        $request->request->add(['acc_A'=>$data_pengajuan->acc_A]);
        $request->request->add(['acc_B'=>$data_pengajuan->acc_B]);
        $data_pengajuan->update($request->all());
        // dd($data_pengajuan);
        return redirect()->route('data-pengajuan')->with('Sukses','Data Berhasil Di Update');
    }
    public function delete($id){
        $data_pengajuan = Pengajuan::find($id);
        $data_pengajuan -> delete();
        return redirect()->route('data-pengajuan')->with('Sukses','Data Berhasil Dihapus');
    }
    public function export() 
    {
        return Excel::download(new PengajuanExport, 'data permintaan kendaraan.xlsx');
    }
}
