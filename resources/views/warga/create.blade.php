@extends('layout/layout')

@section('content')

    <div class="container">
    <h1>CALON KPPS PEMILU 2024</h1>
    <form action="/warga/store" method="POST">
    @csrf
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nama Lengkap</label>
      <input type="text" name="Nama" id="disabledTextInput" class="form-control" placeholder="Nama Lengkap">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">NIK</label>
      <input type="text" name="NIK" id="disabledTextInput" class="form-control" placeholder="Nomor Induk Keluarga">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">No KK</label>
      <input type="text" name="No_KK" id="disabledTextInput" class="form-control" placeholder="Nomor Kartu Keluarga">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Jenis Kelamin</label>
      <select name="Jenis_Kelamin" id="disabledSelect" class="form-select">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-floating mb-3">Alamat</label>
      <input name="Alamat" id="disabledTextInput" class="form-control" placeholder="Kota/Kabupaten">
    </div>
    <input class="btn btn-success" type="submit" name="submit" value="Save">

</form>

    </div>

@endsection