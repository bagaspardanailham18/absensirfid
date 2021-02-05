@extends('main')
@section('title')
    Kehadiran - Tambah
@endsection
@section('content')
    <h2>Tambah Kehadrian</h2>
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
    <form action="{{ route('kehadiran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="User / Nama Lengkap">User / Nama Lengkap</label>
            <select name="user_id" class="form-control">
                @foreach($user as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_lengkap }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Waktu Kehadiran">Waktu Kehadiran</label>
            <input type="datetime-local" name="waktu_kehadiran" class="form-control">
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
@endsection