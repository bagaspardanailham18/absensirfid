@extends('main')
@section('title')
    User - List
@endsection
@section('content')
<a href="{{ url('user/create') }}" class="btn btn-success mt-3 mb-3">Tambah User</a>
@if ($msg = Session::get('success'))
        <div class="alert alert-success">
            {{ $msg }}
        </div>
    @endif
    @if ($msg = Session::get('error'))
        <div class="alert alert-danger">
            {{ $msg }}
        </div>
    @endif
<table class="table table-striped">
  <thead>
    <tr>
        <th>NIM</th>
        <th>Nama Lengkap</th>
        <th>Email</th>
        <th>No Telp</th>
        <th>Jenis Kelamin</th>
        <th>Tempat, Tgl Lahir</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($user as $item)
    <tr>
        <td>{{ $item->nim }}</td>
        <td>{{ $item->nama_lengkap }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->telp }}</td>
        <td>
            @if ($item->jenis_kelamin == 'L')
                Laki-laki
            @else
                Perempuan
            @endif
        </td>
        <td>{{ $item->tempat_lahir }}, {{ $item->tanggal_lahir }}</td>
        <td>
            <img src="{{ url('images/', $item->foto) }}" width="100" height="100" style="object-fit: cover;" alt="">
        </td>
        <td>
            <a href="{{ route('user.edit', $item->id ) }} " class="btn btn-info btn-xs">Ubah</a>
            <form action="{{ route('user.destroy', $item->id ) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin menghapus data ini ?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection