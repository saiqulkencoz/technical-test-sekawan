@extends('admin.master-admin')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Kendaraan Perusahaan</h3>
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
                                            <th>Nama</th>
                                            <th>Merek</th>
                                            <th>Jenis Angkutan</th>
                                            <th>Nomor Polisi</th>
                                            <th>Konsumsi BBM</th>
                                            <th>Jadwal Service</th>
                                            <th>Hak Milik</th>
                                            <th>Riwayat Pemakaian</th>
                                            <th class="text-center">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($data_kendaraan as $kendaraan)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $kendaraan->nama }}</td>
                                                <td>{{ $kendaraan->merek }}</td>
                                                <td>{{ $kendaraan->jenis }}</td>
                                                <td>{{ $kendaraan->plat->nomor_kendaraan }}</td>
                                                <td>{{ $kendaraan->bbm }} KM/Liter</td>
                                                <td>{{ $kendaraan->jadwal_service }}</td>
                                                <td>{{ $kendaraan->hak_milik }}</td>
                                                <td>{{ $kendaraan->riwayat_pemakaian }}</td>
                                                <td class="text-center">
                                                    <a href="/kendaraan/{{ $kendaraan->id }}/edit"
                                                        class="btn btn-warning btn-sm">EDIT</a>
                                                    <a href="/kendaraan/{{ $kendaraan->id }}/delete"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Anda Yakin ?')">DELETE</a>
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
                    <form action="{{ route('add-kendaraan') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Nama Kendaraan</label>
                            <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Kendaraan" required>
                        </div>
                        <div class="form-group">
                            <label>Merek Kendaraan</label>
                            <select class="form-control" name="merek" required>
                                <option value="Honda">Honda</option>
                                <option value="Mitsubishi">Mitsubishi</option>
                                <option value="Toyota">Toyota</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Angkutan</label>
                            <select class="form-control" name="jenis" required>
                                <option value="Barang" selected>Barang</option>
                                <option value="Orang">Orang</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nomor Polisi</label>
                            <select class="form-control" name="plat_id" required>
                                @foreach ($plat as $nopol)
                                    <option value="{{ $nopol->id }}">{{ $nopol->nomor_kendaraan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Konsumsi BBM</label>
                            <input class="form-control" type="text" name="bbm" placeholder="KM/L" required>
                        </div>
                        <div class="form-group">
                            <label>Jadwal Service</label>
                            <input type="text" name="jadwal_service" class="form-control" required autocomplete="off"
                                id="datepicker2" placeholder="Masukkan tanggal">
                            <script>
                                $('#datepicker2').datepicker({
                                    format: 'dd/mm/yyyy',
                                    todayHighlight: true
                                });
                            </script>
                        </div>
                        <div class="form-group">
                            <label>Hak Milik</label>
                            <select class="form-control" name="hak_milik" required>
                                <option value="Sendiri" selected>Sendiri</option>
                                <option value="Sewa PT. A">Sewa PT. A</option>
                                <option value="Sewa PT. B">Sewa PT. B</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Riwayat Pemakaian</label>
                            <input class="form-control" type="text" name="riwayat_pemakaian" placeholder="..." required>
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
