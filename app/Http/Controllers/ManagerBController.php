<?php

namespace App\Http\Controllers;

use \App\Pengajuan;
use Illuminate\Http\Request;

class ManagerBController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $data_pengajuan = Pengajuan::where(['nama_pegawai','LIKE','%'.$request->cari.'%'],['acc_A','=', 'Approved'])->get();
        }
        else{
            $data_pengajuan = Pengajuan::where('acc_A','=', 'Approved')->get();
        }
        return view('manager.indexB',['data_pengajuan' => $data_pengajuan]);
    }
    public function acc($id){
        Pengajuan::where('id', $id)->update(['acc_B' => 'Approved']);
        return redirect()->route('requestB')->with('Sukses','Permintaan pengajuan disetujui');
    }
    public function deny($id){
        Pengajuan::where('id', $id)->update(['acc_B' => 'Denied']);
        return redirect()->route('requestB')->with('Sukses','Permintaan pengajuan ditolak');
    }
}
