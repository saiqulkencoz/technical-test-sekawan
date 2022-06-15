@extends('admin.master-admin')
@section('content')
    <div class="main">
        <div class="main-container">
            <div class="container-fluid">
                <h1 class="mt-2" style="text-align: center">Edit Data Kendaraan</h1>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/kendaraan/{{ $data_kendaraan->id }}/update" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Nama Kendaraan</label>
                                <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Kendaraan"
                                    value="{{ $data_kendaraan->nama }}">
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
                                @if ($data_kendaraan->jenis == 'Barang')
                                    <select class="form-control" name="jenis">
                                        <option value="Barang" selected>Barang</option>
                                        <option value="Orang">Orang</option>
                                    </select>
                                @else
                                    <select class="form-control" name="jenis">
                                        <option value="Barang">Barang</option>
                                        <option value="Orang" selected>Orang</option>
                                    </select>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Nomor Polisi</label>
                                <select class="form-control" name="plat_id" required>
                                    <option value="{{ $data_kendaraan->plat->id }}">{{ $data_kendaraan->plat->nomor_kendaraan }}</option>
                                    <option value="" disabled>=================================</option>
                                    @foreach ($plat as $nopol)
                                        <option value="{{ $nopol->id }}">{{ $nopol->nomor_kendaraan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Konsumsi BBM</label>
                                <input class="form-control" type="text" name="bbm" placeholder="KM/L"
                                    value="{{ $data_kendaraan->bbm }}">
                            </div>
                            <div class="form-group">
                                <label>Jadwal Service</label>
                                <input type="text" name="jadwal_service" class="form-control" required autocomplete="off"
                                    id="datepicker2" placeholder="Masukkan tanggal"
                                    value="{{ $data_kendaraan->jadwal_service }}">
                                <script>
                                    $('#datepicker2').datepicker({
                                        format: 'dd/mm/yyyy',
                                        todayHighlight: true
                                    });
                                </script>
                            </div>
                            <div class=" form-group">
                                <label>Hak Milik</label>
                                @if ($data_kendaraan->hak_milik == 'Sendiri')
                                    <select class="form-control" name="hak_milik">
                                        <option value="Sendiri" selected>Sendiri</option>
                                        <option value="Sewa PT. A">Sewa PT. A</option>
                                        <option value="Sewa PT. B">Sewa PT. B</option>
                                    </select>
                                @elseif($data_kendaraan->hak_milik == 'Sewa PT. A')
                                    <select class="form-control" name="hak_milik">
                                        <option value="Sendiri">Sendiri</option>
                                        <option value="Sewa PT. A" selected>Sewa PT. A</option>
                                        <option value="Sewa PT. B">Sewa PT. B</option>
                                    </select>
                                @else
                                    <select class="form-control" name="hak_milik">
                                        <option value="Sendiri">Sendiri</option>
                                        <option value="Sewa PT. A">Sewa PT. A</option>
                                        <option value="Sewa PT. B" selected>Sewa PT. B</option>
                                    </select>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Riwayat Pemakaian</label>
                                <input class="form-control" type="text" name="riwayat_pemakaian" placeholder="..."
                                    value="{{ $data_kendaraan->riwayat_pemakaian }}">
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
