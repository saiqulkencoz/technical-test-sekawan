<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plat;
class PlatController extends Controller
{
    public function index(){
        $data_plat = Plat::all();
        return view('admin.index_nopol',['data_plat' => $data_plat]);
    }

    public function create(Request $request){
        Plat::create($request->all());
        return redirect()->route('data-plat')->with('Sukses','Data Berhasil Diinput');
    }
    
    public function update(Request $request,$id){
        $data_plat = Plat::find($id);
        $data_plat->update($request->all());
        return redirect()->route('data-plat')->with('Sukses','Data Berhasil Di Update');
    }
    public function delete($id){
        $data_plat = Plat::find($id);
        $data_plat -> delete();
        return redirect()->route('data-plat')->with('Sukses','Data Berhasil Dihapus');
    }
}
