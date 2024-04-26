<!-- resources/views/penduduk/edit.blade.php -->

@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Edit Data Warga</div>

          <div class="card-body">
            <form action="{{ route('penduduk.update', $penduduk->id) }}" method="POST">
              @csrf
              @method('PUT')

              <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" name="nik" class="form-control" required value="{{ $penduduk->nik }}">
              </div>

              <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" required value="{{ $penduduk->nama_lengkap }}">
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" required>{{ $penduduk->alamat }}</textarea>
              </div>

              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" required>
                  <option value="Laki-laki" {{ $penduduk->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                  <option value="Perempuan" {{ $penduduk->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
              </div>

              <div class="form-group">
                <label for="agama">Agama</label>
                <select name="agama" class="form-control" required>
                  <option value="Islam" {{ $penduduk->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                  <option value="Kristen" {{ $penduduk->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                  <option value="Konghucu" {{ $penduduk->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                  <option value="Buddha" {{ $penduduk->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                  <option value="Katolik" {{ $penduduk->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                  <option value="Hindu" {{ $penduduk->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                </select>
              </div>

              <div class="form-group">
                <label for="status">Status Pernikahan</label>
                <select name="status" class="form-control" required>
                  <option value="Menikah" {{ $penduduk->status == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                  <option value="Belum Menikah" {{ $penduduk->status == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                </select>
              </div>

              <div class="form-group">
                <label for="tempat">Tempat Lahir</label>
                <input type="text" name="tempat" class="form-control" required value="{{ $penduduk->tempat }}">
              </div>

              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" required value="{{ $penduduk->tanggal_lahir }}">
              </div>

              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
