@extends('main')
@section('title')
User - Tambah
@endsection
@section('content')
<h2>Tambah User</h2>

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
<form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="NIM">NIM</label>
        <input type="number" name="nim" class="form-control">
    </div>
    <div class="form-group">
        <label for="Card Id">Card Id</label>
        <input type="number" name="card_id" id="card_id" class="form-control">
    </div>
    <div class="form-group">
        <label for="Nama Lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control">
    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="No Telphone">No Telphone</label>
        <input type="number" name="telp" class="form-control">
    </div>
    <div class="form-group">
        <label for="Jenis Kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Tempat Lahir">Tempat Lahir</label>
        <input type="txt" name="tempat_lahir" class="form-control">
    </div>
    <div class="form-group">
        <label for="Tanggal Lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control">
    </div>
    <div class="form-group">
        <label for="Foto">Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <button class="btn btn-success" type="submit">Submit</button>
</form>
@endsection
@section('js')
<script>
    setInterval(function() {
        $.get("http://absensirfid.test/api/tmprfid_get", function(data) {
            $("#card_id").val(data.card_id);
        });
    }, 1000);
</script>
@endsection