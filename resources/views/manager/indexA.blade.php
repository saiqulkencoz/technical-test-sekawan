@extends('manager.master-mngA')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Pengajuan Pemakaian Kendaraan</h3>
                                {{-- <div class="right">
                                    <button type="button" class="btn" data-toggle="modal"
                                        data-target="#exampleModal">Tambah Data <i class="lnr lnr-plus-circle"></i></button>
                                </div> --}}
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
                                                    <a href="/request-a/acc/{{ $data->id }}/approve"
                                                        class="btn btn-success btn-sm">Approve</a>
                                                    <a href="/request-a/deny/{{ $data->id }}/deny"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Anda Yakin ingin menolak?')">Deny</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection