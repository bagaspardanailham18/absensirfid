@extends('main')
@section('title')
    Kehadiran - Ubah
@endsection
@section('content')
    <h2>Ubah Kehadrian</h2>
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
    <form action="{{ route('kehadiran.update', $kehadiran->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="User / Nama Lengkap">User / Nama Lengkap</label>
            <select name="user_id" class="form-control">
                @foreach($user as $item)
                    <option value="{{ $item->id }}" {{ ($item->id == $kehadiran->id) ? 'selected' : null }} >{{ $item->nama_lengkap }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Waktu Kehadiran">Waktu Kehadiran</label>
            <input type="datetime-local" value="{{ $kehadiran->waktu_kehadiran }}" name="waktu_kehadiran" class="form-control">
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
@endsection