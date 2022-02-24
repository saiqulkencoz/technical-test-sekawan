<?php

namespace App\Http\Controllers;

use \App\Pengajuan;
use \App\Kendaraan;

use Illuminate\Http\Request;

class Grafik extends Controller
{
    public function indexadm(){
        //pass data chart
        $data_pengajuan = Pengajuan::all();
        $data_kendaraan = Kendaraan::all();

        $categories = [];
        $data = [];
        $approve = [];
        foreach($data_kendaraan as $dk){
            
        }
        foreach($data_kendaraan as $dk){
            $categories[] = $dk->nama;
            $approve[] = Pengajuan::Where('kendaraan_id',$dk->id)->Where('acc_B','=', 'Approved')->count();
            $data[] = Pengajuan::Where('kendaraan_id',$dk->id)->count();
        }
        return view('admin.grafik',['categories'=>$categories ,'data'=>$data, 'approve'=>$approve]);
    }
    public function indexA(){
        //pass data chart
        $data_pengajuan = Pengajuan::all();
        $data_kendaraan = Kendaraan::all();

        $categories = [];
        $data = [];
        $approve = [];
        foreach($data_kendaraan as $dk){
            
        }
        foreach($data_kendaraan as $dk){
            $categories[] = $dk->nama;
            $approve[] = Pengajuan::Where('kendaraan_id',$dk->id)->Where('acc_B','=', 'Approved')->count();
            $data[] = Pengajuan::Where('kendaraan_id',$dk->id)->count();
        }
        return view('manager.grafikA',['categories'=>$categories ,'data'=>$data, 'approve'=>$approve]);
    }
    public function indexB(){
        //pass data chart
        $data_pengajuan = Pengajuan::all();
        $data_kendaraan = Kendaraan::all();

        $categories = [];
        $data = [];
        $approve = [];
        foreach($data_kendaraan as $dk){
            
        }
        foreach($data_kendaraan as $dk){
            $categories[] = $dk->nama;
            $approve[] = Pengajuan::Where('kendaraan_id',$dk->id)->Where('acc_B','=', 'Approved')->count();
            $data[] = Pengajuan::Where('kendaraan_id',$dk->id)->count();
        }
        return view('manager.grafikB',['categories'=>$categories ,'data'=>$data, 'approve'=>$approve]);
    }
}
