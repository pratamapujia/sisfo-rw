@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Data Warga</div>

          <div class="card-body">
            <a href="{{ route('penduduk.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

            {{-- <form action="{{ route('penduduk.index') }}" method="GET" class="mb-3">
              <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Cari berdasarkan NIK atau Nama" value="{{ request()->get('search') }}">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
              </div>
            </form> --}}

            <div class="table-responsive">
              <table class="table table-striped" id="table1">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Status</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($penduduk as $data)
                    <tr>
                      <td>{{ $data->id }}</td>
                      <td>{{ $data->nik }}</td>
                      <td>{{ $data->nama_lengkap }}</td>
                      <td>{{ $data->alamat }}</td>
                      <td>{{ $data->jenis_kelamin }}</td>
                      <td>{{ $data->agama }}</td>
                      <td>{{ $data->status }}</td>
                      <td>{{ $data->tempat }}</td>
                      <td>{{ $data->tanggal_lahir }}</td>
                      <td>
                        <form action="{{ route('penduduk.destroy', $data) }}" method="POST">
                          <a href="{{ route('penduduk.edit', $data) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"> </i></a> |
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash">
                            </i></button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{-- {{ $penduduk->links() }} --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
