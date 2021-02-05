@extends('main')
@section('title')
    Kehadiran - List
@endsection
@section('content')
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
<a href="{{ url('kehadiran/create') }}" class="btn btn-success mt-3 mb-3">Tambah Kehadiran</a>
<table class="table table-striped">
  <thead>
    <tr>
        <th>Nama Lengkap</th>
        <th>Waktu Kehadiran</th>
        <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($kehadiran as $item)
    <tr>
        <td>{{ $item->user->nama_lengkap }}</td>
        <td>{{ $item->waktu_kehadiran }}</td>
        <td>
            <a href="{{ route('kehadiran.edit', $item->id )}} " class="btn btn-info btn-xs">Ubah</a>
            <form action="{{ route('kehadiran.destroy', $item->id )}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin menghapus data ini ?')">Delete</button>
            </form>
        </td>
    @endforeach
    </tr>
  </tbody>
</table>
@endsection