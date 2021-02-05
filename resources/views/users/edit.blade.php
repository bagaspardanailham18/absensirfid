@extends('main')
@section('title')
    User - Ubah
@endsection
@section('content')
    <h2>Ubah User</h2>
    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="NIM">NIM</label>
            <input type="number" value="{{ $user->nim }}" name="nim" class="form-control">
        </div>
        <div class="form-group">
            <label for="Nama Lengkap">Nama Lengkap</label>
            <input type="text" value="{{ $user->nama_lengkap }}" name="nama_lengkap" class="form-control">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" value="{{ $user->email }}"name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="No Telphone">No Telphone</label>
            <input type="number" value="{{ $user->telp }}" name="telp" class="form-control">
        </div>
        <div class="form-group">
            <label for="Jenis Kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="L" {{ ($user->jenis_kelamin == 'L') ? 'selected' : null }} >Laki-laki</option>
                <option value="P" {{ ($user->jenis_kelamin == 'P') ? 'selected' : null }} >Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Tempat Lahir">Tempat Lahir</label>
            <input type="txt" value="{{ $user->tempat_lahir }}" name="tempat_lahir" class="form-control">
        </div>
        <div class="form-group">
            <label for="Tanggal Lahir">Tanggal Lahir</label>
            <input type="date" value="{{ $user->tanggal_lahir }}" name="tanggal_lahir" class="form-control">
        </div>
        <div class="form-group">
            <label for="Foto">Foto</label><br>
            <input type="file" name="foto">
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
@endsection