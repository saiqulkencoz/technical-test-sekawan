<?php

namespace App\Http\Controllers;

use \App\Pengajuan;
use Illuminate\Http\Request;

class ManagerAController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $data_pengajuan = Pengajuan::where('nama_pegawai','LIKE','%'.$request->cari.'%')->get();
        }
        else{
            $data_pengajuan = Pengajuan::all();
        }
        return view('manager.indexA',['data_pengajuan' => $data_pengajuan]);
    }
    public function acc($id){
        Pengajuan::where('id', $id)->update(['acc_A' => 'Approved']);
        return redirect()->route('requestA')->with('Sukses','Permintaan pengajuan disetujui');
    }
    public function deny($id){
        Pengajuan::where('id', $id)->update(['acc_A' => 'Denied']);
        return redirect()->route('requestA')->with('Sukses','Permintaan pengajuan ditolak');
    }
}
