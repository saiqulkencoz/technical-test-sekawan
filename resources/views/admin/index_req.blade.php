@extends('admin.master-admin')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Pengajuan Pemakaian Kendaraan</h3>
                                <div class="right">
                                    <button type="button" class="btn" data-toggle="modal"
                                        data-target="#exampleModal">Tambah Data <i class="lnr lnr-plus-circle"></i></button>
                                </div>
                            </div>
                            @if (session('Sukses'))
                                <div class="col-lg-12 mt-1">
                                    <div class="alert alert-success mt-2" role="alert">
                                        {{ session('Sukses') }}
                                    </div>
                                </div>
                            @endif
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Driver</th>
                                            <th>Nama Kendaraan</th>
                                            <th>Nomor Polisi</th>
                                            <th>Hak Milik</th>
                                            <th>Rincian</th>
                                            <th>Approval Manajer A</th>
                                            <th>Approval Manajer B</th>
                                            <th class="text-center">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($data_pengajuan as $data)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $data->nama_pegawai }}</td>
                                                <td>{{ $data->kendaraan->nama }}</td>
                                                <td>{{ $data->kendaraan->nopol }}</td>
                                                <td>{{ $data->kendaraan->hak_milik }}</td>
                                                <td>{{ $data->rincian }}</td>
                                                <td>{{ $data->acc_A }}</td>
                                                <td>{{ $data->acc_B }}</td>
                                                <td class="text-center">
                                                    <a href="/pengajuan/{{ $data->id }}/edit"
                                                        class="btn btn-warning btn-sm">EDIT</a>
                                                    <a href="/pengajuan/{{ $data->id }}/delete"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Anda Yakin ?')">DELETE</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="{{route('cetak-pengajuan')}}" class="btn btn-success btn-md">Cetak</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kendaraan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add-pengajuan') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Nama Driver</label>
                            <input class="form-control" type="text" name="nama_pegawai"
                                placeholder="Masukkan Nama Driver">
                        </div>
                        <div class="form-group">
                            <label>Nama Kendaraan</label>
                            <select class="form-control" name="kendaraan_id">
                                @foreach ($data_kendaraan as $kd)
                                    <option value="{{ $kd->id }}">{{ $kd->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Rincian</label>
                            <input class="form-control" type="text" name="rincian" placeholder="Masukkan rincian pengajuan">
                        </div>
                        <div class="form-group">
                            <label>Approval</label>
                            <input class="form-control" type="text" placeholder="Semua Pengajuan Harus melewat Manajer A dan B" disabled>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
@endsection
