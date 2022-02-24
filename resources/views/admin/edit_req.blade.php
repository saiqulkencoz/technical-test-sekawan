@extends('admin.master-admin')
@section('content')
    <div class="main">
        <div class="main-container">
            <div class="container-fluid">
                <h1 class="mt-2" style="text-align: center">Edit Data Pengajuan</h1>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/pengajuan/{{ $data_pengajuan->id }}/update" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Nama Driver</label>
                                <input class="form-control" type="text" name="nama_pegawai"
                                    placeholder="Masukkan Nama Kendaraan" value="{{ $data_pengajuan->nama_pegawai }}">
                            </div>
                            <div class="form-group">
                                <label>Nama Kendaraan</label>
                                <select class="form-control" name="kendaraan_id">
                                    <option value="{{ $data_pengajuan->kendaraan->id }}" selected>
                                        {{ $data_pengajuan->kendaraan->nama }}</option>
                                    <option value="" disabled>========================================</option>   
                                    @foreach ($data_kendaraan as $kd)
                                        <option value="{{$kd->id}}">{{$kd->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Rincian</label>
                                <input class="form-control" type="text" name="rincian" placeholder="..."
                                    value="{{ $data_pengajuan->rincian }}">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg" style="width: 15%">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
