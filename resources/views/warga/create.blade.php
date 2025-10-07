@extends('template')

@section('main')
<div id="warga">
    <h2>Tambah Warga</h2>

    <form action="{{ url('warga') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nik" class="control-label">NIK</label>
            <input name="nik" id="nik" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="nama_warga" class="control-label">Nama</label>
            <input name="nama_warga" id="nama_warga" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="tanggal_lahir" class="control-label">Tgl Lahir</label>
            <input name="tanggal_lahir" id="tanggal_lahir" type="date" class="form-control">
        </div>

        <div class="form-group">
            <label for="jenis_kelamin" class="control-label">Jenis Kelamin:</label>
            <div class="radio">
                <label>
                    <input name="jenis_kelamin" type="radio" value="L"> Laki-laki
                </label>
            </div>
            <div class="radio">
                <label>
                    <input name="jenis_kelamin" type="radio" value="P"> Perempuan
                </label>
            </div>
        </div>

        <div class="form-group">
            <input class="btn btn-primary form-control" type="submit" value="Tambah Warga">
        </div>
    </form>
</div>
@stop

@section('footer')
<div id="footer">
    <p>&copy; 2025 laravelapp.dev</p>
</div>
@stop
