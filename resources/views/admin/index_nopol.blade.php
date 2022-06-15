@extends('admin.master-admin')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Nomor Kendaraan Perusahaan</h3>
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
                                            <th>Nomor Kendaraan</th>
                                            <th class="text-center">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($data_plat as $plat)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $plat->nomor_kendaraan }}</td>
                                                <td class="text-center">
                                                    <button type="button" class="btn cur-p btn-warning" data-toggle="modal"
                                                        data-target="#edit_{{ $plat->id }}">EDIT</button>
                                                    <a href="/plat/{{$plat->id}}/delete" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Anda Yakin ?')">DELETE</a>
                                                    {{-- modal edit --}}
                                                    <div class="modal fade" id="edit_{{ $plat->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLongTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                                        Edit Data Nomor Kendaraan
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="/plat/{{ $plat->id }}/update"
                                                                        method="post">
                                                                        {{ csrf_field() }}
                                                                        <div class="form-group">
                                                                            <label>Nomor Kendaraan</label>
                                                                            <input class="form-control" type="text"
                                                                                name="nomor_kendaraan"
                                                                                placeholder="Masukkan Nomor Kendaraan"
                                                                                required value="{{$plat->nomor_kendaraan}}">
                                                                        </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Simpan</button>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
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
                    <form action="{{ route('add-nopol') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Nomor Kendaraan</label>
                            <input class="form-control" type="text" name="nomor_kendaraan"
                                placeholder="Masukkan Nomor Kendaraan" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    @stop
