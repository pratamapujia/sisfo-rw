@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Tambah Data Warga</div>

          <div class="card-body">
            <form action="{{ route('penduduk.store') }}" method="POST">
              @csrf

              <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" name="nik" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" required></textarea>
              </div>

              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" required>
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>

              <div class="form-group">
                <label for="agama">Agama</label>
                <select name="agama" class="form-control" required>
                  <option value="">Pilih Agama</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Konghucu">Konghucu</option>
                  <option value="Buddha">Buddha</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Hindu">Hindu</option>
                </select>
              </div>

              <div class="form-group">
                <label for="status">Status Pernikahan</label>
                <select name="status" class="form-control" required>
                  <option value="">Pilih Status</option>
                  <option value="Menikah">Menikah</option>
                  <option value="Belum Menikah">Belum Menikah</option>
                </select>
              </div>

              <div class="form-group">
                <label for="tempat">Tempat Lahir</label>
                <input type="text" name="tempat" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" required>
              </div>

              <button type="submit" class="btn btn-primary">Simpan</button>
              {{-- <a href="admin/{{ $penduduk->id ?? '' }}" class="btn btn-primary btn-sm" >
                Simpan
            </a> --}}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
