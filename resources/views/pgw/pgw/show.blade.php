@extends('pgw.master')

@section('title')
<title>Detail Pegawai</title>
@endsection

@section('content')
<script>
    document.getElementById('pegawai').className = 'active';
</script>
        <form class="container-child">
            <div class="title">
                <h2>Detail Pegawai</h2>
            </div>
            @include('pgw.error')
            <div class="form-group">
                <label for="idPgw">ID Pegawai</label><br>
                <p>{{ $pgw->id }}</p>
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label><br>
                <p>{{ $user->email }}</p>
            </div>
            <div class="form-group">
                <label for="name">Nama pegawai</label><br>
                <p>{{ $user->name }}</p>
            </div>
            <div class="form-group">
                <label for="telp">Telephone</label><br>
                <p>{{ $pgw->phone }}</p>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label><br>
                <p>{{ $pgw->address }}</p>
            </div>
        </form>
@endsection
